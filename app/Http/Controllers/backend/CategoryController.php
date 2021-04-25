<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{
    public function index(){

    	// $this->data['categories'] = Category::where('parent_id','=','0')->get();
    	$this->data['categories'] = Category::all();
    	
    	return view('admin.pages.category.index',$this->data);
    }

    public function create(){
    	$this->data['category'] = Category::where('parent_id','=','0')->get();

    	return view('admin.pages.category.create',$this->data);
    }

    public function store( Request $request ){
    	$request->parent_id = 0;
    	Category::create($request->all());

    	return redirect()->route('category');
    }

    public function edit($id){
    	$this->data['category_edit'] = Category::findOrFail($id);
    	$this->data['category'] = Category::where('parent_id','=','0')->get();
    	return view('admin.pages.category.edit',$this->data);
    }

    public function update(Request $request,$id){
    	//return $request->all();
    	$category = Category::findOrFail($id);
    	$category->name = $request->name;
    	$category->description = $request->description;
    	$category->parent_id = $request->parent_id;
    	$category->save();
    	return redirect()->route('category');
    }

    public function delete($id){
    	Category::findOrFail($id)->delete();
    	return redirect()->route('category');
    }
}
