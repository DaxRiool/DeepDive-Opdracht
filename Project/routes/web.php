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

Route::get('/AddLocation', function () {
    return view('AddLocation');
});

Route::get('/AddPoi', function () {
    return view('AddPoi');
});

Route::get('/Pois', function () {
    return view('Poi');
});

Route::get('/Locations', function () {
    return view('Locations');
});
