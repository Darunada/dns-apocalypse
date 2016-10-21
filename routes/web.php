<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    // start epoch in seconds
    $start = time() - strtotime('2016-10-21 12:00:00');

    $numCompanies = 200;
    $dollarsPerSecond = (100000 * $numCompanies)/60/60; // convert to seconds
    $dollarsStart = $start * $dollarsPerSecond;
    return view('home', compact('dollarsStart', 'dollarsPerSecond'));
});
