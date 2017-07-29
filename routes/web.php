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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('trip/custom/store', 'TripController@store')->name('trip.custom.store');

Route::get('trip/custom/show/{id}', 'TripController@show')->name('trip.custom.show');

Route::get('trip/custom/create', 'TripController@create')->name('trip.custom.create');