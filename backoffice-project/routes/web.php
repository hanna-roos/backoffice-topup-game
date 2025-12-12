<?php

use App\Http\Controllers\ProductController;

Route::prefix('catalog/products')->group(function () {

    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

});

use App\Http\Controllers\CategoryController;

Route::prefix('catalog/categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

use App\Http\Controllers\OrderController;

Route::prefix('sales/order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('order.index');
    Route::get('/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/', [OrderController::class, 'store'])->name('order.store');
    Route::get('/{id}/view', [OrderController::class, 'view'])->name('order.view');
    Route::get('/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
    Route::put('/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
});
