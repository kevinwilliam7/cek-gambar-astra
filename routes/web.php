<?php

use App\Http\Controllers\AhassController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CekKpbController;
use App\Http\Controllers\Home\AhassDatatableController;
use App\Http\Controllers\Home\HomeController as HomeHomeController;
use App\Http\Controllers\Motor\MotorController as MotorMotorController;
use App\Http\Controllers\File\FileController as FileFileController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\RekapKpb\RekapKpbController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/oauth/google', [LoginController::class, 'redirectToProvider'])->name('oauth.google');
    Route::get('/oauth/google/callback', [LoginController::class, 'handleProviderCallback'])->name('oauth.google.callback');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [HomeHomeController::class, 'index'])->name('index');

    Route::prefix('home')->name('home.')->group(function () {
        Route::get('/', [HomeHomeController::class, 'index'])->name('index');
    });
    Route::prefix('motor')->name('motor.')->group(function () {
        Route::get('/', [MotorMotorController::class, 'index'])->name('index');
        Route::post('/store', [MotorMotorController::class, 'store'])->name('store');
        Route::post('/update', [MotorMotorController::class, 'update'])->name('update');
    });
    Route::prefix('rekap-kpb')->name('rekap-kpb.')->group(function () {
        Route::get('/', [RekapKpbController::class, 'index'])->name('index');
    });
    Route::prefix('cek-kpb')->name('cek-kpb.')->group(function () {
        Route::get('/', [CekKpbController::class, 'index'])->name('index');
        Route::post('/store', [CekKpbController::class, 'store'])->name('store');
        Route::get('/getAllJobs', [CekKpbController::class, 'getProgressJobList'])->name('getAllJobs');
        Route::get('/getProgressJob/{id}', [CekKpbController::class, 'getProgressJob'])->name('getProgressJob');
        Route::get('/getAllLogJobs', [CekKpbController::class, 'getAllLogJobList'])->name('getAllLogJobs');
        Route::get('/showip', function () {
            return request()->header('X-Forwarded-For');
        });
    });
    Route::prefix('file')->name('file.')->group(function () {
        Route::get('/', [FileFileController::class, 'index'])->name('index');
    });
    Route::prefix('datatable')->name('datatable.')->group(function () {
        Route::get('/ahass', [AhassController::class, 'datatable'])->name('ahass');
        Route::get('/motor', [MotorMotorController::class, 'datatable'])->name('motor');
        Route::get('/rekap-kpb', [RekapKpbController::class, 'datatable'])->name('rekap-kpb');
        Route::get('/cek-kpb', [CekKpbController::class, 'datatable'])->name('cek-kpb');
    });
});
