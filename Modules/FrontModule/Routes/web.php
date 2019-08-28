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
        return redirect()->route('index_front');
    });

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
    Route::get('/', 'FrontModuleController@index')->name('index_front');
    Route::post('/send/question','FrontModuleController@send_message')->name('send_message');
    Route::post('/send/contact','FrontModuleController@send_contact_us')->name('send_contact_us');
    Route::get('/about/us','FrontModuleController@about_us')->name('about_us');
    Route::get('/question','FrontModuleController@question')->name('question');
    Route::get('/contact/us','FrontModuleController@contact')->name('contact');
    Route::get('/services','FrontModuleController@services')->name('services');
    Route::get('/blogs','FrontModuleController@blogs')->name('blogs');
    Route::get('/photos','FrontModuleController@photos')->name('photos');
    Route::get('/videos','FrontModuleController@videos')->name('videos');
    Route::get('/categories/{id}','FrontModuleController@categories')->name('categories');
    Route::get('/services/categories/{id}','FrontModuleController@services_categories')->name('service_categories');
    Route::get('/blogs/{title}','FrontModuleController@single_blog')->name('single_blog');
    Route::get('/services/{title}','FrontModuleController@single_service')->name('single_service');

});

