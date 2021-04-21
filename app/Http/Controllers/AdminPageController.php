<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Image;


class AdminPageController extends Controller
{
    public function index(){
    	return view('admin.pages.index');
    }

    public function product(){
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

    	// if($request->hasFile('image')){
    	// 	//echo "string";
    	// 	$image = $request->file('image');
    	// 	$img   = time().'.'.$request->file('image')->extension(); 
    	// 	$location = public_path('image/products/'.$img);
    		
    	// 	Image::make($image)->save($location);

    	// 	$product_image['image'] = $img;
     //        $product_image['product_id'] = $product->id;
     //        ProductImage::create($product_image);
    	// }

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
    	return redirect()->route('admin.product');
    }
}
