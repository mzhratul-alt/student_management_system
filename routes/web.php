<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/login',[AdminController::class, 'login_page'])->name('admin.login_page');

Route::post('/admin/login_check',[AdminController::class, 'login'])->name('admin.login_check');


Route::prefix('admin')->middleware('admin')->name('admin.')->group(function(){
   Route::view('/dashboard','Admin.dashboard')->name('dashboard');

   Route::post('/dashboard',[AdminController::class, 'logout'])->name('logout');
});
