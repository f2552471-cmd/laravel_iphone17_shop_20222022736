<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// The main welcome page of the store
Route::get('/', function () {
    return view('welcome');
});

// Admin Panel Routes for Categories and Products
Route::resource('admin/categories', CategoryController::class);
Route::resource('admin/products', ProductController::class);
