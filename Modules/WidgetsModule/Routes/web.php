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
    Route::prefix('widgets')->group(function () {
        // Route::get('/', 'WidgetsModuleController@index');

        # All Access.
        Route::group(['middleware' => ['role:superadmin|admin|writer|owner']], function () {
            Route::resource('slider', 'SlidersController')->only(['create', 'store', 'index']);
            Route::resource('partners', 'PartnersController')->only(['create', 'store', 'index']);
            Route::resource('testimonials', 'TestimonialController')->only(['create', 'store', 'index']);
            Route::resource('team', 'TeamController')->only(['create', 'store', 'index']);
            Route::resource('acheive', 'AcheiveController')->only(['create', 'store', 'index']);
            Route::resource('contact_us', 'ContactusController')->only(['create', 'store', 'index']);
            Route::resource('why_us', 'WhyUsController')->only(['create', 'store', 'index']);

            Route::get('contact_us/datatable', 'ContactusController@dataTables');
            Route::get('booking/datatable', 'BookingController@dataTables');

            Route::resource('subscripe', 'SubscripeController')->only('index');
            Route::resource('page', 'PageController')->only(['create', 'store', 'index', 'show']);
            Route::resource('hours', 'WorkHoursController')->only(['create', 'store', 'index']);
            Route::resource('acheive', 'AcheiveController')->only(['create', 'store', 'index','show']);
            Route::resource('booking', 'BookingController')->only(['create', 'show', 'store', 'index']);
        });

        # admin & Superadmin.
        Route::group(['middleware' => ['role:superadmin|admin|owner']], function () {
            Route::resource('slider', 'SlidersController')->only(['edit', 'update']);
            Route::resource('partners', 'PartnersController')->only(['edit', 'update']);
            Route::resource('testimonials', 'TestimonialController')->only(['edit', 'update']);
            Route::resource('team', 'TeamController')->only(['edit', 'update']);
            Route::resource('contact_us', 'ContactusController')->only(['edit', 'update']);
            Route::resource('subscripe', 'SubscripeController')->only(['edit', 'update']);
            Route::resource('page', 'PageController')->only(['edit', 'update']);
            Route::resource('hours', 'WorkHoursController')->only(['edit', 'update']);
            Route::resource('booking', 'BookingController')->only(['edit', 'update']);
            Route::resource('acheive', 'AcheiveController')->only(['edit', 'update']);
            Route::resource('why_us', 'WhyUsController')->only(['edit', 'update']);
        });

        # Only SuperAdmin.
        Route::group(['middleware' => ['role:superadmin|owner']], function () {
            Route::resource('slider', 'SlidersController')->only(['destroy']);
            Route::resource('partners', 'PartnersController')->only(['destroy']);
            Route::resource('testimonials', 'TestimonialController')->only(['destroy']);
            Route::resource('team', 'TeamController')->only(['destroy']);
            Route::resource('contact_us', 'ContactusController')->only(['destroy']);
            Route::resource('subscripe', 'SubscripeController')->only(['destroy']);
            Route::resource('page', 'PageController')->only(['destroy']);
            Route::resource('hours', 'WorkHoursController')->only(['destroy']);
            Route::resource('acheive', 'AcheiveController')->only(['destroy']);
            Route::resource('why_us', 'WhyUsController')->only(['destroy']);
            Route::get('booking/delete/{id}', 'BookingController@destroy');
        });
    });
});
