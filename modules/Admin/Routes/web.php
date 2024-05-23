<?php

use Modules\Admin\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('/modules', [AdminController::class, 'checkModules'])->name('admin.checkModules');
});
