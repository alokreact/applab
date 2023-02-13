<?php 

Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');

Route::get('/category-show', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category-show');
 
Route::post('/category-store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');

Route::resource('/organ', 'App\Http\Controllers\Admin\OrganController');

Route::resource('/test', 'App\Http\Controllers\Admin\TestController');

Route::group(['middleware' => ['auth']], function () {


    Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
 
});
