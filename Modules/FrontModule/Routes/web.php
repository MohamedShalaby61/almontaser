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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\WidgetsModule\Entities\Contactus;

Route::get('/', 'FrontModuleController@index')->middleware('lang');

    Route::post('/send-message',function (Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'message' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails())
        {
            return response()->json(['status' => 0]);
        }

        Contactus::create($request->all());

        return response()->json(['status' => 1]);
    })->name('send.message');

    Route::get('/lang/{lang}',function ($lang){
        if (session()->has('lang')) {
            session()->forget('lang');
            session()->put('lang',$lang);
        } else {
            session()->put('lang',$lang);
        }

        return redirect()->back();
    });
