<?php

use Illuminate\Support\Facades\Route;
use Laravelir\Dashboarder\Http\Controllers\AuthController;
use Laravelir\Dashboarder\Http\Controllers\DashboardController;
use Laravelir\Dashboarder\Http\Controllers\ConfigsController;

Route::group([], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('index');

    Route::group(['prefix' => 'modules',], function () {
        foreach ([] as $key) {
            # code...
        }
    });

    Route::group(['prefix' => 'settings', 'as' => 'setting.'], function () {
        Route::resource('configs', ConfigsController::class);
    });

    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
