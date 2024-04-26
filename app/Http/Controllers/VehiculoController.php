<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $vehiculos = Vehiculo::all();
    return view('vehiculo.index', ['vehiculos' => $vehiculos]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $vehiculos = DB::table('vehiculos')
        ->orderBy('id')
        ->get();
        return view('vehiculo.new', ['vehiculos' => $vehiculos]);

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $vehiculo = new Vehiculo();

    $vehiculo->id = $request->id;
    $vehiculo->marca = $request->marca;
    $vehiculo->modelo = $request->modelo;
    $vehiculo->año = $request->año;
    $vehiculo->precio = $request->precio;
    $vehiculo->kilometraje = $request->kilometraje;
    $vehiculo->tipo = $request->tipo;
    $vehiculo->save();

    return redirect()->route('vehiculo.index')->with('success', 'Cliente creado correctamente.');

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
    $vehiculo = Vehiculo::find($id);
    return view('vehiculo.edit', compact('vehiculo'));
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
    $vehiculo = Vehiculo::find($id);

    $vehiculo->id = $request->id;
    $vehiculo->marca = $request->marca;
    $vehiculo->modelo = $request->modelo;
    $vehiculo->año = $request->año;
    $vehiculo->precio = $request->precio;
    $vehiculo->kilometraje = $request->kilometraje;
    $vehiculo->tipo = $request->tipo;
    $vehiculo->save();

    return redirect()->route('vehiculo.index')->with('success', 'Cliente creado correctamente.');


  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $vehiculo = Vehiculo::find($id);
    $vehiculo->delete();
    return redirect()->route('vehiculo.index')->with('success', 'Cliente creado correctamente.');
  }
}
