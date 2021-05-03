<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\FrontendCategoryController;
use App\Http\Controllers\backend\AdminPageController;
use App\Http\Controllers\backend\AdminProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
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

//user product
Route::group(['prefix'=>'/products'], function(){
    Route::get('/', [ProductController::class,'index'])->name('products');
    Route::get('/{slug}', [ProductController::class,'show'])->name('product.show');
});

//user category show
Route::group(['prefix'=>'/category'], function(){
    Route::get('/{id}', [FrontendCategoryController::class,'show'])->name('category.show');
    
});


// Route::get('category/{id}', [FrontendCategoryController::class,'show'])->name('category.show');

//user search
Route::get('/search',	[PagesController::class,'search'])->name('search');


//admin route

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 	[AdminPageController::class,'index'])->name('admin');


	//admin product route

	Route::group(['prefix' => '/product'], function(){

		Route::get('/', 	                [AdminProductController::class,'product'])->name('product');
		Route::get('/create', 	            [AdminProductController::class,'product_create'])->name('admin.product');
		Route::get('/create/edit/{id}', 	[AdminProductController::class,'product_edit'])->name('admin.product.edit');
		Route::put('/create/edit/{id}', 	[AdminProductController::class,'product_edit_store'])->name('admin.product.edit');
		Route::post('/store',		        [AdminProductController::class,'product_store'])->name('product.store');
		Route::delete('/delete/{id}',       [AdminProductController::class,'delete'])->name('admin.product.delete');
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
    Route::group(['prefix'=>'/brand'], function(){
        Route::get('',  [BrandController::class,'index'])->name('brand');
        Route::get('/create', [BrandController::class,'create'])->name('brand.create');
        Route::post('/create', [BrandController::class,'store'])->name('brand.store');
        Route::get('/edit/{id}',    [BrandController::class,'edit'])->name('brand.edit');
        Route::put('/edit/{id}',    [BrandController::class,'update'])->name('brand.update');
        Route::delete('/delete/{id}',   [BrandController::class,'delete'])->name('brand.delete');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
