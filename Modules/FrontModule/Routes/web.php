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
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::prefix('front_panel')->group(function() {
    Route::get('locale/{locale}', function ($locale){
        Session::put('locale', $locale);
        return redirect()->back();
    });
   
//Route::get('home/locale/{locale}','ProductFrontController@language');
    Route::get('/home', 'ProductFrontController@index');
    Route::post('/home','ProductFrontController@store');
  

});
