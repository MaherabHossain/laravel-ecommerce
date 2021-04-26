<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
// use App\Models\Product;
class ProductController extends Controller
{
     public function index(){

     $this->data['products'] = Product::all();
    // return $this->data;
      return view('pages.products.products',$this->data);
    }

    public function show( $slug ){
    	//return $slug;
    	$this->data['product'] = Product::where('slug','=',$slug)->first();
    	// return $this->data;

    	return view('pages.products.show',$this->data);
    }
}
