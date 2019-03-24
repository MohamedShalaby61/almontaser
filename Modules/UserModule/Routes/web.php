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

Route::prefix('/front')->group(function() {
    Route::get('/login', 'UserLoginController@loginForm')->name('login');
    Route::get('/logout', 'UserLoginController@userLogout')->name('logout');

    Route::post('/do-login', 'UserLoginController@doUserLogin');
    Route::get('/register', 'UserLoginController@register');
    Route::post('/signup', 'UserLoginController@signup');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/profile/{id}', 'UserLoginController@profile');

        Route::post('/update-user/{id}', 'UserLoginController@update_username_mail');

        Route::post('/update-user-password/{id}', 'UserLoginController@update_password');
    });

});
