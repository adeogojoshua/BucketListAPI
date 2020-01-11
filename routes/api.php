<?php

use Illuminate\Http\Request;
use App\BucketList;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::group([ 'prefix' => 'auth'], function (){
    Route::group(['middleware' => ['guest:api']], function () {
        Route::post('login', 'API\AuthController@login');
        Route::post('register', 'API\AuthController@register');
    });
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'API\AuthController@logout');
        Route::get('getuser', 'API\AuthController@getUser');
    });
});

Route::middleware(['auth:api'])->prefix('bucketlists')->group(function () {
    Route::get('/', 'BucketListController@index'); // all bucketlists
    Route::post('/', 'BucketListController@store'); // new bucketlist
    Route::get('/{id}', 'BucketListController@show'); // single bucketlist
    Route::put('/{id}', 'BucketListController@update'); // edit bucketlist
    Route::delete('/{id}', 'BucketListController@delete'); // delete bucketlist

    // BucketList Items
    Route::post('/{id}/items', 'BucketListItemController@store'); // create a new item in bucket list
    Route::get('/{id}/items', 'BucketListItemController@show'); // List all the created items in a bucket list
    Route::put('/{id}/items/{item_id}', 'BucketListItemController@update'); // Update a bucket list item
    Route::delete('/{id}/items/{item_id}', 'BucketListItemController@destroy'); // Delete an item in a bucket list


});
