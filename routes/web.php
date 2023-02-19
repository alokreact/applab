<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/allorgans', [App\Http\Controllers\OrganController::class, 'index'])->name('allorgans');
Route::get('/testbyorgan/{id}', [App\Http\Controllers\OrganController::class, 'findTestbyOrgan'])->name('testbyorgan');
Route::get('/contact', [App\Http\Controllers\OrganController::class, 'index'])->name('contact');

Route::get('add-to-cart/{evt}/{id}/{subtest_id}', [App\Http\Controllers\CartController::class,'addToCart'])->name('add_to_cart');

Route::get('cart', 'FrontEndController@cart')->name('cart');
Route::post('/subtestajax', [App\Http\Controllers\HomeController::class,'getlistofajaxSubtest'])->name('subtest.ajax');


Route::post('/searchsubtest', [App\Http\Controllers\HomeController::class,'searchSubtest'])->name('searchsubtest');

include"admin.php";