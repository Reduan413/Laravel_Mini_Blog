<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CKEditorController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[HomeController::class,'show_all_post'])->name('home');
Route::get('/dashboard',[DashboardController::class,'show_post'])->name('dashboard');
Route::get('/post',[PostController::class,'index'])->name('post_index');
Route::post('/post',[PostController::class,'create'])->name('post_create');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post_edit');
Route::put('/post/edit/{id}',[PostController::class,'update'])->name('post_update');
Route::get('/post/delete/{id}',[PostController::class,'destroy'])->name('post_destroy');
Route::post('ckeditor/upload',[CKEditorController::class,'upload'])->name('ckeditor.image-upload');
Route::get('/dashboard/create-student',[StudentsController::class,'index'])->name('student_index');
Route::post('/dashboard/create-student',[StudentsController::class,'create'])->name('student_create');
