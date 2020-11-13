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

/* Route::get('country', 'App\Http\Controllers\Country\CountryController@country');
Route::get('country/{id}', 'App\Http\Controllers\Country\CountryController@countryByID');
Route::post('countrySave', 'App\Http\Controllers\Country\CountryController@countrySave');
Route::put('country/{id}', 'App\Http\Controllers\Country\CountryController@countryUpdate');
Route::delete('country/{id}', 'App\Http\Controllers\Country\CountryController@countryDelete'); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('country', 'App\Http\Controllers\Country\Country')->middleware('api');
});