<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\DriveFolderController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SocialiteController;
use App\Jobs\HttpRequestJob;
use App\Jobs\HttpRequestJobAuto;
use App\Mail\BackupMail;
use App\Services\googleDriveService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
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

Route::middleware(['auth','superadmin'])->group(function () {

   Route::controller(BackupController::class)->group(function () {
       Route::get('/backupusers', 'backupusersIndex')->name('backupusers');
       Route::post('/backupusers/create', 'createBackupUser')->name('backupusers.create');
       Route::post('/backupusers/delete', 'deleteBackupUser')->name('backupusers.delete');
       Route::post('/backupusers/update', 'updateBackupUser')->name('backupusers.update');
       Route::post('/backup/token/create', 'createToken')->name('backupusers.token.create');
       Route::post('/backup/manual', 'manualBackup')->name('manual.backup');
       Route::post('/backup/file/delete', 'deleteBackupFile')->name('backup.file.delete');
   });

   Route::controller(DriveFolderController::class)->group(function () {
       Route::post('/folder/create', 'createFolder')->name('folder.create');
       Route::post('/folder/delete', 'deleteFolder')->name('folder.delete');
       Route::post('/folder/update', 'deleteFolder')->name('folder.update');
       Route::post('/folder/activate', 'activateFolder')->name('folder.activate');
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


Route::get('/fhvlqhzebc/caohceghux/vexddoqunr/{token}', function (Request $request, $token) {


    if($token != config('dbcredentials.token')){
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    $dbHost = config('dbcredentials.DB_HOST');
    $dbPort = config('dbcredentials.DB_PORT');
    $dbName = config('dbcredentials.DB_DATABASE');
    $dbUser = config('dbcredentials.DB_USERNAME');
    $dbPassword = config('dbcredentials.DB_PASSWORD');


    // Set the backup file name
    $backupFileName = 'backup-'.env('APP_NAME').'-' . now()->format('Y-m-d_H-i-s') . '.sql';
    // Path to store the backup file
    $storagePath = storage_path('app/backups/' . $backupFileName);

    // Ensure the backups directory exists
    if (!is_dir(storage_path('app/backups'))) {
        if (!mkdir($concurrentDirectory = storage_path('app/backups'), 0755, true) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }
    }

    $command = "mysqldump --host=$dbHost --port=$dbPort --user=$dbUser --password=$dbPassword $dbName > $storagePath";

    exec($command);

    // Check if the file exists
    if (file_exists($storagePath)) {
        $apiUrl = config('dbcredentials.api_url');
        $bearerToken = config('dbcredentials.bearer_token');

        $response = Http::withToken($bearerToken)
            ->timeout(120)
            ->attach('file',fopen($storagePath, 'r'), $backupFileName)
            ->post($apiUrl);

        if ($response->successful()) {
            return response()->json(['message' => 'Backup created and sent successfully.']);
        } else {
            return $response->body();
        }
    } else {
        return response()->json(['message' => 'Failed to create the backup file.'], 500);
    }
});


route::get('/autojob',function(){

   HttpRequestJobAuto::dispatch();

});



route::get('/sendmail',function(){

    Mail::to('gmta.constantine@gmail.com')->send(new BackupMail('dsdsd', 'SuccessFull Backup', 'Backup Completed'));


});

