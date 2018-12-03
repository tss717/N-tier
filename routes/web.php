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
    Route::get('/addproject', function () {
        return view('addproject');
    });

    Route::post('/addproject', function () {
        return view('addproject');
    });


    Route::get('/view', function () {
        return view('view');

});

Auth::routes();
