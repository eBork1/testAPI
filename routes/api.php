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

// Auth + Login
//Route::post('/login', 'AuthenticationController@login')->name('login');


Route::middleware('auth:api')->group(function () {
    Route::get('/logout', 'AuthenticationController@logout')->name('logout');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Main user routes for getting the sample data
Route::middleware('api_token')->group(function () {
    Route::get('/employees', 'EmployeeController@index');
});

Route::middleware('api_token')->group(function () {
    Route::get('/employees/{id}', 'EmployeeController@getByID');
});

