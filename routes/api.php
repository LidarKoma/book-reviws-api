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

Route::middleware('auth:api')->get('/user',['middleware' => 'cors', function (Request $request) {
    return $request->user();
}]);
// routes/api.php

Route::apiResource('books', 'BookController')->'middleware' => 'cors';
Route::post('books/{book}/ratings', 'RatingController@store')->'middleware' => 'cors';
//Route::get('services', 'ServiceController@show');
//Route::get('service/{id}', 'ServiceController@findById');
Route::apiResource('categories', 'CategoryController')->'middleware' => 'cors';
Route::apiResource('services', 'ServiceController')->'middleware' => 'cors';
Route::apiResource('works', 'WorkController')->'middleware' => 'cors';
//Route::get('/send/email', 'ServiceController@mail');



Route::get('work', 'ServiceController@work')->'middleware' => 'cors';


