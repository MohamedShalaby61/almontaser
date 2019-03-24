<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

# Products Resource
Route::resource('products', 'Api\ProductApiController')->only(['index', 'show']);

# Categories Index
Route::get('categories', 'Api\CategoryApiController@index');

# Show Category
Route::get('category/{id}', 'Api\CategoryApiController@show');

# List Children for parent Categ
Route::get('category/{id}/sub', 'Api\CategoryApiController@list_children');

# List Products for Category
Route::get('category/{id}/products', 'Api\CategoryApiController@list_products');

# List Categories (Parent only)
Route::get('categories/parent', 'Api\CategoryApiController@list_parent');
