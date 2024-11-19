<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();


Route::group(['middleware' => 'auth', 'prefix'=> 'admin'], function () {
    
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

    // Admin Mabagement
    // Route::group(['as' => 'am','prefix'=> 'admin-management'], function () {});
});
