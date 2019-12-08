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
    return view('introduction');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/models', function () {
    return view('models');
});

Route::get('/programming', function () {
    return view('programming');
});

Route::get('/other', function () {
    return view('other');
});
