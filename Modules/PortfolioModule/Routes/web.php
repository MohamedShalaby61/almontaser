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

Route::group(['prefix' => 'admin-panel', 'middleware' => ['auth:admin']], function () {
    Route::prefix('portfoliomodule')->group(function () {

        # Access for all.
        Route::group(['middleware' => ['role:superadmin|admin|writer|owner']], function () {
            Route::resource('category', 'PortfolioCategoryController')->only(['create', 'store', 'index']);
            Route::resource('project', 'PortfolioController')->only(['create', 'store', 'index']);

            Route::get('category/datatable','PortfolioCategoryController@dataTables');
            Route::get('category/delete/{id}','PortfolioCategoryController@destroy');

            Route::get('project/datatable','PortfolioController@dataTables');
            Route::get('project/delete/{id}','PortfolioController@destroy');
        });

        # Access for admin and super only.
        Route::group(['middleware' => ['role:admin|superadmin|owner']], function () {
            Route::resource('category', 'PortfolioCategoryController')->only(['edit', 'update']);
            Route::resource('project', 'PortfolioController')->only(['edit', 'update']);
        });

        # Access for superadmin.
        Route::group(['middleware' => ['role:superadmin|admin|writer|owner']], function () {
            Route::resource('category', 'PortfolioCategoryController')->only(['destroy']);
            Route::resource('project', 'PortfolioController')->only(['destroy']);
        });
    });
});
