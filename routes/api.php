<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Main
use App\Http\Controllers\Main\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



/*
|--------------------------------------------------------------------------
| ProjectController
|--------------------------------------------------------------------------
*/
// Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::resource('projects', ProjectController::class);
// });
