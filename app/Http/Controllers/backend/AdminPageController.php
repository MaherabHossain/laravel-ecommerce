<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Image;
use App\Http\Controllers\Controller;


class AdminPageController extends Controller
{
    public function index(){
    	return view('admin.pages.index');
    }

    
}
