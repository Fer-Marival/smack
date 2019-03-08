<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Accessories;
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'image', 'content', 'description', 'price', 'available', 'category', 'locale'];

    public function accessories()
    {
    	return $this->hasMany(Accessories::class, 'product_id');
    }
}
