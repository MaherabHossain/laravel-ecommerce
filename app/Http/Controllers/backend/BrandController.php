<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class BrandController extends Controller
{
     public function index(){
    	$this->data['brands'] = Brand::all();
    	
    	return view('admin.pages.brand.index',$this->data);
    }

    public function create(){

    	return view('admin.pages.brand.create');
    }

    public function store( Request $request ){
    	Brand::create($request->all());
    	return redirect()->route('brand');
    }

    public function edit($id){
    	$this->data['brand_edit'] = Brand::findOrFail($id);
    	return view('admin.pages.brand.edit',$this->data);
    }

    public function update(Request $request,$id){
    	$category = Brand::findOrFail($id);
    	$category->name = $request->name;
    	$category->description = $request->description;
    	$category->save();
    	return redirect()->route('brand');
    }

    public function delete($id){
    	Brand::findOrFail($id)->delete();
    	return redirect()->route('brand');
    }
}
