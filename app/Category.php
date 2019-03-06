<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Product;

class Category extends Model
{

	protected $table = 'categories';
	protected $fillable = ['name'];

}
