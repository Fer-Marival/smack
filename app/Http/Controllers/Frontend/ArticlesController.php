<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Accessories;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $product;
    protected $accessories;
    protected $lang;

    function __construct(Product $product, Accessories $accessories){
        $this->product = $product;
        $this->accessories = $accessories;
        // $this->lang = \App::getLocale();
        
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
        
       //dd($this->lang);
         $articulos = $this->product->where('category_id', 1)
            ->where('locale', $this->language())->get();
            //dd($articulos);
         return view('frontend.cameras.index', compact('articulos'));
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
        $articulo = $this->product->findOrFail($id);
        //dd($articulo);
        return view('frontend.cameras.show', compact('articulo'));

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
