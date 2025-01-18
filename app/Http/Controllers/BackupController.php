<?php

namespace App\Http\Controllers;

use App\Models\DriveFolder;
use App\Models\GoogleFile;
use App\Models\User;
use App\Services\googleDriveService;
use Illuminate\Http\Request;
use Dedoc\Scramble\Attributes\ExcludeAllRoutesFromDocs;


#[ExcludeAllRoutesFromDocs]

class BackupController extends Controller
{

    public function createBackupUser(Request $request)
    {
        $randomString = bin2hex(random_bytes(16));

        $user              = new User();
        $user->name        = $request->name;
        $user->email       = $randomString.'@subuser.com';
        $user->password    = bcrypt('d3%F*JxR7T&bWq!');
        $user->adminpass   = 'd3%F*JxR7T&bWq!';
        $user->provider    = 'local';
        $user->provider_id = 'local';
        $user->backupUser  = 1;
        $user->adminID     = auth()->user()->id;

        $user->save();

        return back();
    }

    public function backupusers(Request $request)
    {
        $users = User::where('backupUser', 1)
            ->where('adminID', auth()->user()->id)
            ->with('folders')->paginate(20);

        return view('admin.backupusers', compact('users'));
    }

    public function createToken(Request $request)
    {
        $user         = User::find($request->user_id);
        $randomString = bin2hex(random_bytes(16));
        $user->createToken($randomString);

        return back();
    }


    public function backup(Request $request)
    {
        $folder   = DriveFolder::where('user_id', $request->user()->id)->first();
        $folderId = $folder->folderID;
        $file     = $request->file('file');
        $filename = $file->getClientOriginalName();

        $google_file_id = (new googleDriveService())->uploadFile($file, $filename, $folderId);

        $google_file                  = new GoogleFile();
        $google_file->user_id         = $request->user()->id;
        $google_file->google_file_id  = $google_file_id;
        $google_file->drive_folder_id = $folder->id;

        $google_file->save();

        return $google_file_id;
    }
}
