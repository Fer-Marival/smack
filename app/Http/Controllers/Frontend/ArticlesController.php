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

    function __construct(Product $product, Accessories $accessories){
        $this->product = $product;
        $this->accessories = $accessories;
    }

    public function getProducts()
    {
        $articulos = $this->product->where('category_id', 1)->get();
         return $articulos;
    }

    public function getComplements()
    {
        $complements = $this->product->where('category_id', 2)->get();
        return $complements;
    }

    public function getTour()
    {
        $tour = $this->product->where('category_id', 3)->get();
        return $tour;
    }

    public function index()
    {

         return view('frontend.cameras.index');
         //$articulos = $this->product->paginate(10)->where('category_id', 1);
         //$complements = $this->accessories->all();
         //return view(, compact('articulos', 'complements'));
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
