<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\backend\AdminPageController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
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

    // admin category route

    Route::group(['prefix'=>'/categories'], function(){
    	Route::get('',	[CategoryController::class,'index'])->name('category');
    	Route::get('/create', [CategoryController::class,'create'])->name('category.create');
    	Route::post('/create', [CategoryController::class,'store'])->name('category.store');
    	Route::get('/edit/{id}',	[CategoryController::class,'edit'])->name('category.edit');
    	Route::put('/edit/{id}',	[CategoryController::class,'update'])->name('category.update');
    	Route::delete('/delete/{id}',	[CategoryController::class,'delete'])->name('category.delete');
    });
});
