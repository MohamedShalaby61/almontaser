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

    Route::prefix('/')->group(function () {
        // Route::get('/', '@index');

        Route::group(['middleware' => ['role:writer|admin|superadmin|owner']], function () {
            Route::resource('product', 'ProductController')->only(['create', 'store', 'index']);
            Route::resource('/product-categories','ProductCategoriesController')->only(['create', 'store', 'index']);

            Route::get('product-categories/datatable','ProductCategoriesController@dataTables');
            Route::get('product-categories/delete/{id}','ProductCategoriesController@destroy');

        });

        Route::group(['middleware' => ['role:admin|superadmin|owner']], function () {
            Route::resource('product', 'ProductController')->only(['edit', 'update']);
            Route::resource('/product-categories', 'ProductCategoriesController')->only(['edit', 'update']);
        });

        Route::group(['middleware' => ['role:superadmin|owner']], function () {
            Route::resource('product', 'ProductController')->only(['destroy']);
            Route::delete('/delete/{id}', 'ProductCategoriesController@destroy');
        });

        Route::get('/ajax', 'ProductCategoriesController@ajaxDataSrc');
    });

});
