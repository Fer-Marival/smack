<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model
{

	protected $table = 'categories';
	protected $fillable = ['name'];


	/*public function product()
	{
		return $this->hasMany(Product::class, 'category_id');
	}*/

}
