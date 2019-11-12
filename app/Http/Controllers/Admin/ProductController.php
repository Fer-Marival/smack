<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    public $lang;

    function __construct(Product $product, Category $category){
        $this->product = $product;
        $this->category = $category;
        $this->lang = \App::getLocale();
    }

    public function index()
    {
        $products_total = $this->product->all();
        $total = count($products_total);
        $products = $this->product->with('categories')->get();
        //->where('locale', $this->lang)->get();
        $categories = $this->category->all();
        return view('admin.products.index', compact('products', 'total', 'categories'));
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
        $fileName = $file->getClientOriginalName();
        $path = '/img/uploads/'.$fileName;
        
        $fileStorage = $file->move(public_path().'/img/uploads/', $fileName);
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

        $product = $this->product->find($id);
        $categories = $this->category->all();
        return view('admin.products.edit', compact('product', 'categories'));
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
        return redirect()->route('products.index')->with('success', 'Product Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);
        $product->delete();
        return redirect()->route('products.index')->with('delete', 'Category Delete');
        
    }
}
