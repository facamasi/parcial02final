<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;


use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $ventas = Venta::all();
    return view('venta.index', ['ventas' => $ventas]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $ventas = DB::table('ventas')
      ->orderBy('id')
      ->get();
    return view('venta.new', ['ventas' => $ventas]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
{
    $request->validate([
        'vehiculo_id' => 'required',
        'cliente_id' => 'required',
        'fecha_venta' => 'required|date_format:Y-m-d',
        'precio_final' => 'required|numeric',
    ]);

    $venta = new Venta();
    $venta->vehiculo_id = $request->vehiculo_id;
    $venta->cliente_id = $request->cliente_id;
    $venta->fecha_venta = $request->fecha_venta;
    $venta->precio_final = $request->precio_final;
    $venta->save();

    return redirect()->route('venta.index')->with('success', 'Venta creada correctamente.');
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
    $venta = Venta::find($id);
    return view('venta.edit', compact('venta'));
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
    $request->validate([
        'vehiculo_id' => 'required',
        'cliente_id' => 'required',
        'fecha_venta' => 'required|date_format:Y-m-d',
        'precio_final' => 'required|numeric',
    ]);

    $venta = Venta::find($id);
    $venta->vehiculo_id = $request->input('vehiculo_id');
    $venta->cliente_id = $request->input('cliente_id');
    $venta->fecha_venta = $request->input('fecha_venta');
    $venta->precio_final = $request->input('precio_final');
    $venta->save();

    return redirect()->route('venta.index')->with('success', 'Venta actualizada correctamente.');
}


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $venta = Venta::find($id);
    $venta->delete();
    return redirect()->route('venta.index')->with('success', 'Venta creado correctamente.');

  }
}
