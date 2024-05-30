<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Controllers\AdminController;
use Modules\Admin\Controllers\DashboardController;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('/modules', [AdminController::class, 'checkModules'])->name('admin.checkModules');
});
