<?php

use App\Http\Controllers\CitiesController;
use App\Http\Controllers\WeatherController;
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

Route::get('/design', function () {
    return view('forecast-design');
});

Route::get('/getCitiesJson', [CitiesController::class, 'getAllJson']);

Route::get('/getWeatherData', [WeatherController::class, 'getDaily']);