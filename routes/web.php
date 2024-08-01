<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('belajar', BelajarController::class);

Route::get('add', [\App\Http\Controllers\BelajarController::class, 'add']);
Route::post('store_add', [\App\Http\Controllers\BelajarController::class, 'storeAdd'])->name('store_add');
Route::get('sub', [\App\Http\Controllers\BelajarController::class, 'sub']);
Route::post('store_sub', [\App\Http\Controllers\BelajarController::class, 'storeSub'])->name('store_sub');
Route::get('mult', [\App\Http\Controllers\BelajarController::class, 'mult']);
Route::post('store_mult', [\App\Http\Controllers\BelajarController::class, 'storeMult'])->name('store_mult');
Route::get('div', [\App\Http\Controllers\BelajarController::class, 'div']);
Route::post('store_div', [\App\Http\Controllers\BelajarController::class, 'storeDiv'])->name('store_div');
Route::resource('user', UserController::class);