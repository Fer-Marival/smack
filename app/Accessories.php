<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
	protected $table = 'accessories';
    protected $fillable = ['name', 'image', 'description', 'availables', 'price', 'product_id'];


}
