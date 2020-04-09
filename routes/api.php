<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
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
/*
|--------------------------------------------------------------------------
| Employee Data
|--------------------------------------------------------------------------
*/
Route::middleware('api_token')->group(function () {
    Route::get('/employees', 'EmployeeController@index');
});

Route::middleware('api_token')->group(function () {
    Route::get('/employees/{id}', 'EmployeeController@getByID');
});

/*
|--------------------------------------------------------------------------
| Blog Posts
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Sample images
|--------------------------------------------------------------------------
*/

