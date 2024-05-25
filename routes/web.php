<?php

use App\Http\Controllers\CandyController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return 'Hello, World!';
});

Route::get('candies', function () {
    return view('candies');
});

Route::get('candies/{id}', function () {
    return view('candy');
});
*/

Route::get('candies', [CandyController::class, 'index']);
Route::get('candy/{id}', [CandyController::class, 'candy']);