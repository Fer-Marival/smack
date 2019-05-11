<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller
{
	protected $lang;

	function __construct()
	{
		//$this->lang = \App::getLocale();
	}
    public function index()
    {
    	$locale = \App::getLocale();

    	if (\App::isLocale('es')) {
    		$this->lang = 'es';
    	}else{
    		$this->lang = 'en';
    	}
    	$language = $this->lang;
    	$products = Product::where('category_id', 1)->get();
    	
    	return view('frontend.home', compact('products', 'language'));
    }
}
