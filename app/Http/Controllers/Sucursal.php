<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Sucursal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sucursales = \App\Sucursal::orderBy('idSucursal', 'desc')->get();
        return view('sucursal.index')->with(['sucursales' => $sucursales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursal.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = new \App\Sucursal;
        $this->validate($request, [
          'nombre' => 'required',
          'direccion' => 'required',
          'telefono' => 'required'
        ]);
        $sucursal -> nombre = $request->get('nombre');
        $sucursal -> direccion = $request->get('direccion');
        $sucursal -> telefono = $request->get('telefono');

        $sucursal->save();

        return redirect()->route('sucursales_path');

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
    public function edit(\App\Sucursal $sucursal)
    {
        return view('sucursal.edit')->with(['sucursal' => $sucursal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Sucursal $sucursal, Request $request)
    {
      $this->validate($request, [
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required'
      ]);
        $sucursal->update(
          $request->only('nombre', 'direccion', 'telefono')
        );

        return redirect()->route('sucursales_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(\App\Sucursal $sucursal)
    {
        $sucursal->delete();

        return redirect()->route('sucursales_path');
    }
}
