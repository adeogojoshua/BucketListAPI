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

Route::middleware(['auth:api'])->prefix('bucketlist')->group(function () {
    Route::get('bucketlists', 'BucketListController@index');
    Route::get('/{id}', 'BucketListController@show');
});