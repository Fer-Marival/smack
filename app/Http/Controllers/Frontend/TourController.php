<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;
use App\Product;

class TourController extends Controller
{

    protected $tour;
    protected $product;
    protected $lang;

    function __construct(Product $product, Tour $tour){
        $this->product = $product;
        $this->tour = $tour;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = $this->tour->all();
        $product = $this->product->where('category_id', 1)->where('locale', $this->language())->get();
        //dd($tours);
        return view('frontend.acuaticos', compact('tours', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tours = $this->tour->findOrFail($id);
        //dd($articulo);
        return view('frontend.trips.show', compact('tours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
