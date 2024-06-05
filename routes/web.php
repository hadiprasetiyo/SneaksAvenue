<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ArticleController;

// Landing Page
Route::get('/',[FrontendController::class,'home'])->name('home');

// Login
Route::get('/login',[AuthController::class,'login'])->name('login');
// Register
Route::get('/register',[AuthController::class,'register'])->name('register');

// Dashboard
Route::prefix('admin')->group(function() {
  Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

  // ===== CRUD =====
  Route::get('/article',[ArticleController::class,'index'])->name('article.index');
  // Read
  Route::get('/article/read/{id}',[ArticleController::class,'show'])->name('article.show');
  // Create
  Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
  Route::post('/article/create/process',[ArticleController::class,'store'])->name('article.store');
  // Update
  Route::get('/article/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');
  // proses update
  Route::put('/article/update/{id}',[ArticleController::class,'update'])->name('article.update');
  // Delete
  Route::delete('/article/delete/{id}',[ArticleController::class,'destroy'])->name('article.delete');
});