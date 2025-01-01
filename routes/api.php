<?php


use App\Http\Controllers\InterventionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
//

Route::controller(InterventionController::class)->group(function () {
    Route::post('/resize',  'resize')->middleware('auth:sanctum')->name('resize');
    Route::post('/convert',  'convert')->middleware('auth:sanctum')->name('convert');
    Route::post('/scale', 'scale')->middleware('auth:sanctum')->name('scale');
    Route::post('/fit', 'fit')->middleware('auth:sanctum')->name('fit');
})->middleware('auth:sanctum');


//Route::post('/resize', [InterventionController::class, 'resize'])->middleware('auth:sanctum')->name('resize');
//Route::post('/convert', [InterventionController::class, 'convert'])->middleware('auth:sanctum')->name('convert');
//Route::post('/scale', [InterventionController::class, 'scale'])->middleware('auth:sanctum')->name('scale');
