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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/spa', 'SpaController@index');



//Route::get('/{any}', 'SpaController@index')->where('any', '.*');


Route::get('/send/email', 'ServiceController@mail');
Route::get('contact', 'ServiceController@create')->name('contact.create');
Route::get('/sendemail', 'SendEmail@fn_sendmail');
Route::get('/enquiryform', 'SendEmail@index');
Route::post('/enquiryform', 'SendEmail@enquiryform');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
