<?php

use App\Http\Controllers\admin\CandyController as AdminCandyController;
use App\Http\Controllers\CandyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('candies', [CandyController::class, 'index']) ->name('web.candies.index');
Route::get('candies/{id}', [CandyController::class, 'candy']) ->name('web.candies.candy');

Route::get('admin/candies', [AdminCandyController::class, 'index']) ->name('admin.index');
Route::get('admin/candies/create', [AdminCandyController::class, 'create']) ->name('admin.create');
Route::post('admin/candies', [AdminCandyController::class, 'store']) ->name('admin.store');
Route::get('admin/candies/{id}/edit', [AdminCandyController::class, 'edit']) ->name('admin.edit');
Route::post('admin/candies/{id}', [AdminCandyController::class, 'update']) ->name('admin.update');
Route::delete('admin/candies/{id}', [AdminCandyController::class, 'destroy'])->name('admin.destroy');