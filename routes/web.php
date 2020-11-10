<?php

use Illuminate\Support\Facades\Route;

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

Route::get('country', 'App\Http\Controllers\Country\CountryController@country');
Route::get('country/{id}', 'App\Http\Controllers\Country\CountryController@countryByID');
Route::post('countrySave', 'App\Http\Controllers\Country\CountryController@countrySave');