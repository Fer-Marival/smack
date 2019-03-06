<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Accessories;
use App\Category;
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'path', 'description', 'content', 'price', 'available', 'category_id', 'locale'];

    public function accessories()
    {
    	return $this->hasMany(Accessories::class, 'product_id');
    }

    public function categories()
    {
    	return $this->belongsTo(Category::class);
    }
}
