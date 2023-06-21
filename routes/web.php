<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use  App\Http\Controllers\ProductController;


Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/category',[CategoryController::class, 'category'])->name('category');
Route::get('/category_create',[CategoryController::class, 'create'])->name('category.create');
Route::post('/category_store',[CategoryController::class, 'store'])->name('category.store');



Route::get('/product',[ProductController::class, 'product'])->name('product');