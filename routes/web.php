<?php

use App\Http\Controllers\front\{
    AboutController,
    BlogController,
    ContactController,
    HomeController,
    ProductsController,
    ServicesController
};

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'front'], function () {
    Route::get('/', [HomeController::class, "index"])->name('index');
    Route::get('/about', [AboutController::class, "index"])->name('about');
    Route::get('/services', [ServicesController::class, "index"])->name('services');
    Route::get('/products/{slug}', [ProductsController::class, "index"])->name('products');
    Route::get('/blog', [BlogController::class, "index"])->name('blog');
    Route::get('/contact', [ContactController::class, "index"])->name('contact');
});
