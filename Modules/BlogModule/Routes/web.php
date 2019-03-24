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

Route::group(['prefix' => 'admin-panel', 'middleware' => ['auth:admin']], function(){

    # For All Access.
    Route::group(['middleware' => ['role:writer|admin|superadmin|owner']], function () {

        Route::resource('/blogs', 'BlogController')->only(['create', 'store', 'index']);
        Route::resource('/blog-categories', 'CategoriesController')->only(['create', 'store', 'index']);

        Route::get('blogs/datatable','BlogController@dataTables');
        Route::get('blogs/delete/{id}','BlogController@destroy');

        Route::get('blog-categories/datatable','CategoriesController@dataTables');
        Route::get('blog-categories/delete/{id}','CategoriesController@destroy');

    });

    # For Admins only.
    Route::group(['middleware' => ['role:admin|superadmin|owner']], function () {

        Route::resource('/blogs', 'BlogController')->only(['edit', 'update']);
        Route::resource('/blog-categories', 'CategoriesController')->only(['edit', 'update']);

    });

    # For superadmin only.
    Route::group(['middleware' => ['role:superadmin|owner']], function () {

        Route::delete('blogs/delete/{id}', 'BlogController@destroy');
        Route::delete('/blog-categories/delete/{id}', 'CategoriesController@destroy');

    });

    Route::get('/ajax', 'CategoriesController@ajaxDataSrc');

});
