<?php

namespace App\Http\Controllers;

use App\Models\DriveFolder;
use Illuminate\Http\Request;

class DriveFolderController extends Controller
{
    public function createFolder(Request $request)
    {
        $folder             = new DriveFolder();
        $folder->user_id    = $request->user_id;
        $folder->folderName = trim($request->folderName);
        $folder->folderID   = trim($request->folderID);
        $folder->save();

        return back();
    }

    public function updateFolder(Request $request) {}

    public function deleteFolder(Request $request)

    {
        $folder = DriveFolder::find($request->folder_id);

        $folder->delete();


        return back();
    }

    public function activateFolder(Request $request)
    {
        $folder = DriveFolder::find($request->folder_id);

        if ($folder->is_active == 1) {
            $folder->is_active = 0;
        } else {
            $folder->is_active = 1;
        }
        $folder->save();

        return response()->noContent();
    }

}
