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


    Route::prefix('servicemodule')->group(function () {


        Route::group(['middleware' => ['role:superadmin|admin|writer|owner']], function () {
            Route::resource('service', 'ServiceController')->only(['create', 'store', 'index']);
            Route::resource('category', 'ServiceCategoryController')->only(['create', 'store', 'index']);
            Route::post('change/feature', 'ServiceController@change_feature')->name('change_feature');
            Route::get('category/datatable','ServiceCategoryController@dataTables');
            Route::get('category/delete/{id}','ServiceCategoryController@destroy');

            Route::get('service/datatable','ServiceController@dataTables');
            Route::get('service/delete/{id}','ServiceController@destroy');


        });

        Route::group(['middleware' => ['role:admin|superadmin|owner']], function () {
            Route::resource('service', 'ServiceController')->only(['edit', 'update']);

            Route::resource('category', 'ServiceCategoryController')->only(['edit', 'update']);
        });

        Route::group(['middleware' => ['role:admin|superadmin|owner']], function () {
            Route::resource('service', 'ServiceController')->only(['destroy']);

            Route::resource('category', 'ServiceCategoryController')->only(['destroy']);
        });
    });

});
