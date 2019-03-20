<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    protected $product;
    protected $category;

    function __construct(Product $product, Category $category){
        $this->product = $product;
        $this->category = $category;
    }

    public function index()
    {
        $products_total = $this->product->all();
        $total = count($products_total);
        $products = $this->product->all();
        //dd($products);
        return view('admin.products.index', compact('products', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $path = 
        $path = public_path('/img/uploads/').$name;
        $fileStorage = $file->move(public_path().'/img/uploads/', $name);
        $this->product->create([
            'name' => $request->name,
            'path' => $path,
            'content' => $request->content,
            'description' => $request->description,
            'price' => $request->price,
            'available' => $request->available,
            'locale' => $request->locale,
            'category_id' => $request->category_id
        ]);
        return back()->with('success', 'Producto creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Product::findOrFail($id);

        return view('admin.products.edit', compact('product'));
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
        //dd($request->all());
        $product = Product::find($id);
        $product->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->destroy();
        return back();
        
    }
}
