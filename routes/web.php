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

//welcome page
Route::get('/', 'welcomeController@index');
Route::get('operator', 'welcomeController@index')->name('operator');
Route::get('01-getBodyInformation','welcomeController@getBodyInformation')->name('getBodyInformation-01');
Route::get('02-signUp','welcomeController@signUp')->name('signUp-02');
Route::get('03-signIn','welcomeController@signIn')->name('signIn-03');
Route::get('09-sendEmail', 'welcomeController@sendEmail')->name('sendEmail-09');

//login page
Route::get('04-login', 'loginController@index')->name('login-04');
Route::get('05-saveRecord', 'loginController@saveRecord')->name('saveRecord-05');
Route::get('06-getRecord', 'loginController@getRecord')->name('getRecord-06');
Route::get('07-getRecommendation', 'loginController@getRecommendation')->name('getRecommendation-07');
Route::get('08-getProgress', 'loginController@getProgress')->name('getProgress-08');
Route::get('10-getDate', 'loginController@getDate')->name('getDate-10');
Route::get('11-setTable', 'loginController@setTable')->name('setTable-11');
Route::get('12-setProfile', 'loginController@setProfile')->name('setProfile-12');










