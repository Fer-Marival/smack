<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Accessories;
use App\Category;
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'image', 'content', 'description', 'price', 'available', 'category_id', 'locale'];

    public function accessories()
    {
    	return $this->hasMany(Accessories::class, 'product_id');
    }

    public function category(){
    	return $this->hasMany(Category::class, 'category_id');
    }
}
