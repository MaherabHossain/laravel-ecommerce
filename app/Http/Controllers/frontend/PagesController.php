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
    public function search ( Request $request ){
    	// return $request->all();
    	$search  = $request->search;
    	$this->data['search'] = $search;

    	$this->data['products'] = Product::orWhere('title','like','%'.$search.'%')
    									 ->orWhere('description','like','%'.$search.'%')->get();
		
		return view('pages.products.search',$this->data);
    }
}
