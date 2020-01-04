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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/bucketlists', 'PagesController@bucketlists')->name('bucketlist');

// Auth::routes();

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::post('logout', 'UserController@register')->name('logout');
Route::group(['middleware' => 'auth:api'], function()
{
   Route::post('details', 'UserController@details');
});

Route::middleware(['web'])->group(function () {
  // Route::get('/bucketlist/{id}', 'BucketListController@show');
});
