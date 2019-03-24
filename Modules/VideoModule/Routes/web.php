<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin-panel', 'middleware' => ['auth:admin']], function() {

    Route::prefix('videos')->group(function () {

        Route::group(['middleware' => ['role:admin|writer|superadmin|owner']], function () {

            Route::resource('videocategory', 'VidCategController')->only(['create', 'store', 'index']);
            Route::resource('video', 'VideoController')->only(['create', 'store', 'index']);
        });

        Route::group(['middleware' => ['role:admin|superadmin|owner']], function () {
            Route::resource('videocategory', 'VidCategController')->only(['edit', 'update']);
            Route::resource('video', 'VideoController')->only(['edit', 'update']);
        });

        Route::group(['middleware' => ['role:superadmin|owner']], function () {
            Route::resource('videocategory', 'VidCategController')->only(['destroy']);
            Route::resource('video', 'VideoController')->only(['destroy']);
        });

    });

});
