<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

Route::prefix('admin')->controller(AdminController::class)->name('admin.')->middleware(['auth','is_admin'])->group(function(){
    Route::get('/','index')->name('index');
});
Route::get('/',function(){
    return 'Good Job';
})->name('home.index')  ;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
