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


    Route::prefix('config-module')->group(function () {

        Route::group(['middleware' => ['role:admin|superadmin|owner']], function () {
            Route::get('/', 'ConfigController@index');
            Route::get('/index', 'ConfigController@index1');
            Route::post('/update', 'ConfigController@update');
        });

    });

});
