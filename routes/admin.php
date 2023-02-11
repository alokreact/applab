<?php 

Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category-create');

Route::get('/category-show', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category-show');
 