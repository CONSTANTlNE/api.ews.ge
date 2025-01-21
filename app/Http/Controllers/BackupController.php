<?php

namespace App\Http\Controllers;

use App\Jobs\BackupJob;
use App\Jobs\HttpRequestJob;
use App\Models\BackupDomain;
use App\Models\DriveFolder;
use App\Models\GoogleFile;
use App\Models\User;
use App\Services\googleDriveService;
use Illuminate\Http\Request;
use Dedoc\Scramble\Attributes\ExcludeAllRoutesFromDocs;
use Illuminate\Support\Facades\Storage;


#[ExcludeAllRoutesFromDocs]

class BackupController extends Controller
{

    public function backupusersIndex(Request $request)
    {
        $users = User::where('backupUser', 1)
            ->where('adminID', auth()->user()->id)
            ->with('folders')
            ->with('domains')
            ->with('files.driveFolder')
            ->get();

        return view('admin.backupusers', compact('users'));
    }

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
        $user->user_app_token=$request->user_app_token;
        $user->adminID     = auth()->user()->id;
        $user->save();

        $user->createToken($randomString);

        $domain=new BackupDomain();
        $domain->user_id=$user->id;
        $domain->domain=$request->domain;
        $domain->save();

        $folder=new DriveFolder();
        $folder->user_id=$user->id;
        $folder->folderName=$request->folderName;
        $folder->folderID=$request->folderID;
        $folder->is_active=1;
        $folder->save();


        return back();
    }

    public function deleteBackupUser(Request $request){

        $user=User::find($request->user_id);
        $user->delete();

        return back();
    }

    public function updateBackupUser(Request $request){
        $user=User::find($request->user_id);
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
        $user = User::find($request->user()->id);
        $file = $request->file('file');
        $originalFilename = $file->getClientOriginalName();
        $tempFilePath = $file->storeAs('temp', $originalFilename, 'public'); // Us
        $filename = $file->getClientOriginalName();


        BackupJob::dispatch($user, $tempFilePath,$filename);

        return response()->json([
            'success' => true,
            'message' => 'Job Dispatched',
        ], 200);
    }

    public function manualBackup(Request $request){

        $user = User::with('folders','domains')->find($request->user_id);

        $folder=$user->folders->where('is_active',1)->first();
        $domain=$user->domains->where('is_active',1)->first();


        HttpRequestJob::dispatch('https://'.$domain->domain.'/fhvlqhzebc/caohceghux/vexddoqunr/'.$user->user_app_token);

        return back();

    }

    public function deleteBackupFile(Request $request){

        $file=GoogleFile::find($request->file_id);

        if($file){
            if( (new googleDriveService())->deleteFile($file->google_file_id)){
                $file->delete();
            } else {
                return back()->with('alert_error','Google Drive error');
            }
        }  else {
            return back()->with('alert_error','File not found in DB');
        }

        return back()->with('alert_success','File deleted form DB and Drive successfully');

    }
}
