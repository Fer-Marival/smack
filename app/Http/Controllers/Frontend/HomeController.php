<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller
{
    protected $products;
	protected $lang;

	function __construct(Product $product)
	{
        $this->products = $product;
		//$this->lang = \App::getLocale();
	}

    public function language()
    {
        $locale = \App::getLocale();

        if (\App::isLocale('es')) {
            $this->lang = 'es';
        }else{
            $this->lang = 'en';
        }
        return $this->lang;
    }

    public function index()
    {
    	
    	//$language = $this->lang;
    	$products = $this->products->where('category_id', 1)->where('locale', $this->language())->get();
    	//dd($products);
    	return view('frontend.home', compact('products'));
    }
}
