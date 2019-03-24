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

Route::prefix('admin-panel')->group(function() {


    Route::get('/','AdminController@dashboard');
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin_login');
    Route::post('/login', 'AdminLoginController@doAdminLogin');
    Route::get('logout', 'AdminLoginController@adminLogout');



    Route::group(['middleware' => ['role:superadmin|owner']], function () {
        Route::resource('admins','AdminController');
    });

});
