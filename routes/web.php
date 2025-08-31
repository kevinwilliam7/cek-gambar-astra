<?php

use App\Http\Controllers\AhassController;
use App\Http\Controllers\Home\AhassDatatableController;
use App\Http\Controllers\Home\HomeController as HomeHomeController;
use App\Http\Controllers\Motor\MotorController as MotorMotorController;
use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});


Route::prefix('home')->name('home.')->group(function () {
    Route::get('/', [HomeHomeController::class, 'index'])->name('index');
});
Route::prefix('motor')->name('motor.')->group(function () {
    Route::get('/', [MotorMotorController::class, 'index'])->name('index');
});
Route::prefix('datatable')->name('datatable.')->group(function () {
    Route::get('/ahass', [AhassController::class, 'datatable'])->name('ahass');
    Route::get('/motor', [MotorMotorController::class, 'datatable'])->name('motor');
});
