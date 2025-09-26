<?php

use App\Http\Controllers\AhassController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Home\AhassDatatableController;
use App\Http\Controllers\Home\HomeController as HomeHomeController;
use App\Http\Controllers\Motor\MotorController as MotorMotorController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\RekapKpb\RekapKpbController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home.index');
    });

    Route::prefix('home')->name('home.')->group(function () {
        Route::get('/', [HomeHomeController::class, 'index'])->name('index');
    });
    Route::prefix('motor')->name('motor.')->group(function () {
        Route::get('/', [MotorMotorController::class, 'index'])->name('index');
    });
    Route::prefix('rekap-kpb')->name('rekap-kpb.')->group(function () {
        Route::get('/', [RekapKpbController::class, 'index'])->name('index');
    });
    Route::prefix('datatable')->name('datatable.')->group(function () {
        Route::get('/ahass', [AhassController::class, 'datatable'])->name('ahass');
        Route::get('/motor', [MotorMotorController::class, 'datatable'])->name('motor');
        Route::get('/rekap-kpb', [RekapKpbController::class, 'datatable'])->name('rekap-kpb');
    });
});
