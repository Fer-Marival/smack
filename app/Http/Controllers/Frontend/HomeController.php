<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller
{
    public function index($lang)
    {
    	$products = Product::where('category_id', 1)->get();
    	//dd($products);
    	return view('frontend.home', compact('products'));
    }
}
