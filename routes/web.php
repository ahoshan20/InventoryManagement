<?php

use App\Http\Controllers\Admin\AdminManagementController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('pusher.pusher');
});

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin-dashboard'], function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('/admin', AdminManagementController::class);

    // Admin Mabagement Route
    Route::get('/admin/status/{id}',[AdminManagementController::class,'status'])->name('admin.status');
});

Route::get('/post-create', [PostController::class, 'create'])->name('post.create');
Route::post('/post-store', [PostController::class, 'store'])->name('post.store');
Route::get('/pusher1', [PostController::class, 'pusher1']);
