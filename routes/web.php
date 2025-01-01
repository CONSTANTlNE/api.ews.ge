<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('auth.login');
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

