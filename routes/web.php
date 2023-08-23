<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',[DashboardController::class,'show_post'])->name('home');
Route::get('/post',[PostController::class,'index'])->name('post_index');
Route::post('/post',[PostController::class,'create'])->name('post_create');