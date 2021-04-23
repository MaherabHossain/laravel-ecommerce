<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\backend\AdminPageController;
use App\Http\Controllers\backend\ProductController;
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


//users route

Route::get('/',  [PagesController::class,'index'])->name('index');
Route::get('/products', [PagesController::class,'products'])->name('products');


//admin route

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 	[AdminPageController::class,'index'])->name('admin');


	//admin product route

	Route::group(['prefix' => '/product'], function(){

		Route::get('/', 	                [ProductController::class,'product'])->name('product');
		Route::get('/create', 	            [ProductController::class,'product_create'])->name('admin.product');
		Route::get('/create/edit/{id}', 	[ProductController::class,'product_edit'])->name('admin.product.edit');
		Route::put('/create/edit/{id}', 	[ProductController::class,'product_edit_store'])->name('admin.product.edit');
		Route::post('/store',		        [ProductController::class,'product_store'])->name('product.store');
		Route::delete('/delete/{id}',       [ProductController::class,'delete'])->name('admin.product.delete');
    });
});
