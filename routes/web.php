<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\DriveFolderController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SocialiteController;
use App\Services\googleDriveService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Laravel\Socialite\Facades\Socialite;



Route::get('/', function () {
    return view('index');
});


Route::middleware('auth')->group(function () {
    Route::controller(MainController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
    Route::controller(ApiController::class)->group(function () {
        Route::post('/create/token', 'create')->name('token.create');
        Route::post('/delete/token', 'delete')->name('token.delete');
    },
    );

    route::get('/tokens', function () {
        foreach (auth()->user()->tokens as $token) {
            echo $token->name.'<br/>'.'<br/>';
//            return $token;
        }
    });
});

Route::middleware('superadmin')->group(function () {

   Route::controller(BackupController::class)->group(function () {

       Route::get('/backupusers', 'backupusers')->name('backupusers');
       Route::post('/backupusers/create', 'createBackupUser')->name('backupusers.create');
       Route::post('/backup/token/create', 'createToken')->name('backupusers.token.create');
   });

   Route::controller(DriveFolderController::class)->group(function () {

       Route::post('/folder/create', 'createFolder')->name('folder.create');
       Route::post('/folder/delete', 'deleteFolder')->name('folder.delete');
       Route::post('/folder/update', 'deleteFolder')->name('folder.update');
   });
});




Route::get('/github/redirect', [SocialiteController::Class, 'githubRedirect'])->name('github.login');
Route::get('/github/callback', [SocialiteController::Class, 'githubCallback'])->name('github.callback');




// RESIZE IMAGES WITH INTERVENTION
Route::get('resizetest', function (Request $request) {
    return view('resize');
});

Route::post('/resize2', function (Request $request) {
    $uploadedFile = $request->file('file');

    $manager = new ImageManager(new Driver());
    $image   = $manager->read($uploadedFile);

//        $image->resize($request->width, $request->height);
//        $image->scale(width: $request->width);
//        $image->scaleDown(width: $request->width);
    $image->cover($request->width, $request->height);


    $resizedPath = $request->width.'x'.$request->height.'.'.$uploadedFile->getClientOriginalExtension();
    Storage::disk('public')->put($resizedPath, (string) $image->encode());

    // Return the resized image as a download
    return response()->download(storage_path('app/public/'.$resizedPath))->deleteFileAfterSend(true);
})->name('resize2');


route::get('/testupload',function(){

return view('googletest');
});

route::post('/upload',function(Request $request){

    $filename = $request->file->getClientOriginalName();
    $file=$request->file;

  return   (new googleDriveService())->uploadFile($file,$filename,'1hIT8rSdxst_-04vvMDtYey1Z7sEFMZyP');

})->name('upload');



