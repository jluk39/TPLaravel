<?php

use App\Http\Controllers\admin\CandyController as AdminCandyController;
use App\Http\Controllers\CandyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('web.candies.index');
});

Route::get('candies', [CandyController::class, 'index']) ->name('web.candies.index');
Route::get('candies/{id}', [CandyController::class, 'candy']) ->name('web.candies.candy');
Route::get('types/{id}', [CandyController::class, 'type']) ->name('web.candies.types');
Route::post('/cart/add/{id}', [CandyController::class, 'add'])->name('web.candies.add');
Route::post('/cart/remove/{id}', [CandyController::class, 'remove'])->name('web.candies.remove');
Route::post('/cart/buy', [CandyController::class, 'buy'])->name('web.candies.buy');
Route::get('/cart', [CandyController::class, 'cart'])->name('web.candies.cart');

Route::get('admin/candies', [AdminCandyController::class, 'index']) ->name('admin.index') ->middleware('auth');
Route::get('admin/candies/create', [AdminCandyController::class, 'create']) ->name('admin.create') ->middleware('auth');
Route::post('admin/candies', [AdminCandyController::class, 'store']) ->name('admin.store') ->middleware('auth');
Route::get('admin/candies/{id}/edit', [AdminCandyController::class, 'edit']) ->name('admin.edit') ->middleware('auth');
Route::post('admin/candies/{id}', [AdminCandyController::class, 'update']) ->name('admin.update') ->middleware('auth');
Route::delete('admin/candies/{id}', [AdminCandyController::class, 'destroy'])->name('admin.destroy') ->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
