<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteProductController;
use App\Models\Product;
use Illuminate\Routing\Router;

// Frontend............................
 Route::get('/',[HomeController::class,'home'])->name('home');
 Route::get('/user-login',[CustomerController::class,'user'])->name('user.login');
//  Route::get('/get-products-type/{type}',WebsiteProductController::class,'geByType'])->name('products.by.type');

 Route::get('/search',[HomeController::class,'search'])->name('search');

Route::post('/do-login',[CustomerController::class,'dologin'])->name('customer.dologin');



 Route::get('/customer-registration',[CustomerController::class,'registration'])->name('customer.registration');
 Route::post('/do-registration',[CustomerController::class,'customer_store'])->name('customer.do-registration');
 



 Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');
 Route::post('/admin/do-login',[UserController::class,'loginf'])->name('admin.do-login');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    // Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

    Route::get('/admin/do-logout',[UserController::class,'logout'])->name('admin.do-logout');


    Route::get('/admin',[DashboardController::class,'dashboard'])->name('dashboard');



    Route::get('/category',[CategoryController::class, 'category'])->name('category');
    Route::get('/create_category',[CategoryController::class, 'create'])->name('category.create');
    Route::post('/category_store',[CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/name/{type}', [CategoryController::class,'categoryType'])->name('category.type');

    Route::get('/category_edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category_update/{id}',[CategoryController::class, 'update'])->name('category.update');
    Route::get('/category_delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category_show/{id}',[CategoryController::class, 'show'])->name('category.show');


    Route::get('/category-wise-product/{id}',[CategoryController::class, 'CategoryWiseProduct'])->name('categorywise.ptoduct');

    Route::get('/product',[ProductController::class, 'product'])->name('product');
    Route::get('/product_create',[ProductController::class, 'create'])->name('product.create');
    Route::post('/product_store',[productController::class, 'store'])->name('product.store');

    Route::get('/product_edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product_update/{id}',[ProductController::class, 'update'])->name('product.update');
    Route::get('/product_delete/{id}',[ProductController::class, 'delete'])->name('product.delete');
    Route::get('/product_show/{id}',[ProductController::class, 'show'])->name('product.show');

    Route::get('/hijab',[HijabController::class, 'hijab'])->name('hijab');

    Route::get('/report',[ProductController::class, 'report'])->name('report');
    Route::get('/report/search',[ProductController::class, 'reportSearch'])->name('report.search');
});
