<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'login'])->name('admin.login');
 Route::post('/admin/do-login',[UserController::class,'loginf'])->name('admin.do-login');




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    // Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

    Route::get('/admin/do-logout',[UserController::class,'logout'])->name('admin.do-logout');


    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');



    Route::get('/category',[CategoryController::class, 'category'])->name('category');
    Route::get('/category_create',[CategoryController::class, 'create'])->name('category.create');
    Route::post('/category_store',[CategoryController::class, 'store'])->name('category.store');
    




    Route::get('/product',[ProductController::class, 'product'])->name('product');
});
