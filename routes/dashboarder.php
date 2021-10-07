<?php

use Illuminate\Support\Facades\Route;
use Laravelir\Dashboarder\Http\Controllers\DashboardController;

Route::group([], function () {
    Route::get('dashboarder', [DashboardController::class, 'dashboard']);
});
