<?php

use App\Http\Controllers\admin\CandyController as AdminCandyController;
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

Route::get('candies', [CandyController::class, 'index']) ->name('web.candies.index');
Route::get('candies/{id}', [CandyController::class, 'candy']) ->name('web.candies.candy');

Route::get('admin/candies', [AdminCandyController::class, 'index']) ->name('admin.index');