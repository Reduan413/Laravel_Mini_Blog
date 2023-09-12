<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowStudentsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ShowPostsController;
use App\Http\Controllers\StudentPageController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[HomeController::class,'show_all_post'])->name('home');
Route::get('/all_student',[StudentPageController::class,'show_all_student'])->name('student_page');
Route::get('/dashboard',[DashboardController::class,'show_post'])->name('dashboard');
Route::get('dashboard/all-post',[ShowPostsController::class,'show_all_post'])->name('all_post');
Route::get('dashboard/create-post',[PostController::class,'index'])->name('post_create_index');
Route::post('dashboard/create-post',[PostController::class,'create'])->name('post_create');
Route::get('dashboard/post/edit/{id}',[PostController::class,'edit'])->name('post_edit');
Route::put('dashboard/post/edit/{id}',[PostController::class,'update'])->name('post_update');
Route::get('dashboard/post/delete/{id}',[PostController::class,'destroy'])->name('post_destroy');
Route::post('ckeditor/upload',[CKEditorController::class,'upload'])->name('ckeditor.image-upload');
Route::get('/dashboard/all-students',[ShowStudentsController::class,'show_all_student'])->name('all_student');
Route::get('/dashboard/create-student',[StudentsController::class,'index'])->name('student_create_index');
Route::post('/dashboard/create-student',[StudentsController::class,'create'])->name('student_create');
