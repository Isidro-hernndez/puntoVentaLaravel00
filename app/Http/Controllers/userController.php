<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Sucursal;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     protected function validator(array $data)
     {
         return Validator::make($data, [
             'name' => 'required|string|max:255',
             'apellidoPaterno' => 'required|string|max:255',
             'apellidoMaterno' => 'required|string|max:255',
             'tipo' => 'required|string',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:6|confirmed',
         ]);
     }

    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('usuario.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = sucursal::orderBy('idSucursal', 'desc')->get();
        return view('usuario.register')->with(['sucursales'=>$sucursales]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       User::create([
          'nombre' => $request['name'],
          'email' => $request['email'],
          'apellidoPaterno' => $request['apellidoPaterno'],
          'apellidoMaterno' => $request['apellidoMaterno'],
          'tipo' => $request['tipo'],
          'password' => bcrypt($request['password']),
          'sucursal_id' => $request['nombreSucursal'],
      ]);
      return redirect()->route('users_path');
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
