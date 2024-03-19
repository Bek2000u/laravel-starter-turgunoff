<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Admin

//Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::resources([
        'admin/settings' => SettingsController::class,
    ]);

});
