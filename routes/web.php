<?php

use App\Http\Controllers\Admin\AdminManagementController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin-dashboard'], function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('/admin', AdminManagementController::class);

    // Admin Mabagement Route
    Route::get('/admin/status/{id}',[AdminManagementController::class,'status'])->name('admin.status');
});
