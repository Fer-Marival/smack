<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;
use App\Destino;
class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $tours;
    protected $destinos;
    function __construct(Tour $tour, Destino $destino)
    {
        $this->tours = $tour;
        $this->destinos = $destino;
    }

    public function index()
    {
        $tours = $this->tours->all();
        $destinos = $this->destinos->all();
        return view('admin.tours.index', compact('tours', 'destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinos = $this->destinos->all();
        return view('admin.tours.create', compact('destinos'));
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
        $path = '/img/uploads/tours/'.$fileName;
        
        $fileStorage = $file->move(public_path().'/img/uploads/tours/', $fileName);
        //dd($path);
        $json = json_encode($request->destinos);
        //dd($json);
       $this->tours->create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path,
            'duracion' => $request->duracion,
            'locale' => $request->locale,
            'destinos' => $json
        ]);
        //dd('tour creado');
        return back()->with('success', 'Tour Creado!');
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
