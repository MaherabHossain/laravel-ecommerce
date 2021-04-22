<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProductImage;
use App\Models\belongsTo;
use App\Models\brand;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','brand_id','title','description','slug','quntity','price','offer_price','admin_id']; 
    public function image () {

    	return $this->hasMany(ProductImage::class);
    }

    public function category (){
    	return $this->belongsTo(Category::class);
    }
    public function brand (){
    	return $this->belongsTo(brand::class);
    }
}
