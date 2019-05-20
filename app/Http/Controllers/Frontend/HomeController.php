<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Services;

class HomeController extends Controller
{
    protected $products;
    protected $services;
	protected $lang;

	function __construct(Product $product, Services $service)
	{
        $this->products = $product;
        $this->services = $service;
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
        $services = $this->services->where('locale', $this->language())->get();

        return view('frontend.home', compact('products', 'services'));
    }
}
