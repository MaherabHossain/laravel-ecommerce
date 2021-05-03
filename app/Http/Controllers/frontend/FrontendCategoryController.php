<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class FrontendCategoryController extends Controller
{
   public function show($id){
   		$this->data['category']  = Category::findOrFail($id);
   		return view('pages.category.show',$this->data);
   }
}
