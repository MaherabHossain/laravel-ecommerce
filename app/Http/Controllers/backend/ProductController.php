<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Image;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product(){
        $this->data['products'] = Product::all();

        return view('admin.pages.product.index',$this->data);
    }

    public function product_create(){
    	return view('admin.pages.product.create');
    }



    public function product_store (Request $request){

    	$product = new Product;
    	$product->title = $request->title;
    	$product->description = $request->description;
    	$product->slug = Str::slug($request->title, '-');
    	$product->quantity = $request->quantity;
    	$product->category_id = 1;
    	$product->brand_id = 1;
    	$product->admin_id = 0;
    	$product->price = $request->price;
    	$product->offer_price = $request->offer_price;
    	$product->status = 0;
    	$product->save();

        if(isset($request->image)){
            
            if(count($request->image)>0){
            foreach ($request->image as  $image) {
                 $img   = time().'.'.$image->extension(); 
                 $location = public_path('image/products/'.$img);
                
                 Image::make($image)->save($location);

                $product_image['image'] = $img;
                $product_image['product_id'] = $product->id;
                ProductImage::create($product_image);
            }
        }
        }
    	return redirect()->route('admin.product');
    }
    public function product_edit ($id){
      $this->data['product'] = Product::findOrFail($id);
      $this->data['image']   = ProductImage::findImage($id);
      
      return view('admin.pages.product.create',$this->data);
    }

    public function product_edit_store (Request $request,$id) {
        $product = Product::findOrFail($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->offer_price = $request->offer_price;
        $product->save();

        return redirect()->route('product');
    }

    public function delete($id){
        Product::find($id)->delete();
        return redirect()->route('product');
    }
}
