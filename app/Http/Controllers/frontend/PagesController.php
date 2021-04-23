<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
class PagesController extends Controller
{
    public function index() {

    	return view('pages.index');
    }

    public function products(){

     $this->data['products'] = Product::all();
    // return $this->data;
      return view('pages.products.products',$this->data);
    }
}
