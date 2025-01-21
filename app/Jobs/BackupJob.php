<?php

namespace App\Jobs;

use App\Mail\BackupMail;
use App\Models\DriveFolder;
use App\Models\GoogleFile;
use App\Services\googleDriveService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class BackupJob implements ShouldQueue

{
    use Queueable;

    protected $user;
    protected $filePath;
    protected $filename;

    /**
     * Create a new job instance.
     */
    public function __construct($user, $filePath,$filename)
    {
        $this->user = $user;
        $this->filePath  = $filePath;
        $this->filename  = $filename;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        try {
            // Fetch the folder for the user
            $folder = DriveFolder::where('user_id', $this->user->id)
                ->where('is_active', 1)
                ->first();
            $folderId = $folder->folderID;
            $fileContent = Storage::disk('public')->get($this->filePath);

            $googleDriveService = new GoogleDriveService();
            $google_file_id = $googleDriveService->uploadFile($fileContent, $this->filename, $folderId);

            // Save the Google file ID and other details
            $google_file = new GoogleFile();
            $google_file->user_id = $this->user->id;
            $google_file->google_file_id = $google_file_id;
            $google_file->drive_folder_id = $folder->id;
            $google_file->file_name = $this->filename;
            $google_file->save();

            Storage::disk('public')->delete($this->filePath);


            Log::channel('backup')->info('SuccessFull Backup for user ' . $this->user->name . ', Google file ID: ' . $google_file_id);
            Mail::to('gmta.constantine@gmail.com')->send(new BackupMail($this->user->name, 'SuccessFull Backup', 'Backup Completed'));

        } catch (\Exception $e) {

            $rand=random_int(1000,9999);

            Log::channel('backup')->error( $rand.' Backup  failed for user ' . $this->user->name . ': ' . $e->getMessage());
            Mail::to('gmta.constantine@gmail.com')->send(new BackupMail($this->user->name, $rand.' Backup Error', 'Is folder Shared with Service Account?'));
        }
    }
}
