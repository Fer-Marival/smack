<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $service; 
    function __construct(Services $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $services = $this->service->all();
        return view('admin.services.index', compact('services'));
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
        //dd($request->all());
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $path = '/img/uploads/services/'.$fileName;
        
        $fileStorage = $file->move(public_path().'/img/uploads/services/', $fileName);
        $this->service->create([
            'name' => $request->name,
            'path' => $path,
            'locale' => $request->locale,
        ]);
        return back()->with('success', 'Servicio creado!');
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
        $service = $this->service->findOrFail($id);
        return view('admin.services.edit', compact('service'));
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
        $service = $this->service->findOrFail($id);
        $service->update($request->all());
        return redirect()->route('services.index')->with('success', 'Service Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = $this->service->findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('delete', 'Service Delete');
    }
}
