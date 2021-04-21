<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminPageController;
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

Route::get('/',  [PagesController::class,'index'])->name('index');
Route::get('/products', [PagesController::class,'products'])->name('products');

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 	[AdminPageController::class,'index']);
	//Route::get('/product', 	        [AdminPageController::class,'product'])->name('product');
	Route::get('/product/create', 	[AdminPageController::class,'product'])->name('admin.product');
	Route::post('/product/store',	[AdminPageController::class,'product_store'])->name('product.store');
});