<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $clientes = Cliente::all();
    return view('cliente.index', ['clientes' => $clientes]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = DB::table('clientes')
        ->orderBy('id')
        ->get();
        return view('cliente.new', ['clientes' => $clientes]);
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
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'direccion' => 'required',
    ]);

    $cliente = new Cliente();
    $cliente->nombre = $request->input('nombre');
    $cliente->apellido = $request->input('apellido');
    $cliente->telefono = $request->input('telefono');
    $cliente->email = $request->input('email');
    $cliente->direccion = $request->input('direccion');
    $cliente->save();

    return redirect()->route('cliente.index')->with('success', 'Cliente creado correctamente.');
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
    $cliente = Cliente::find($id);
    return view('cliente.edit', compact('cliente'));
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
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'direccion' => 'required',
    ]);

    $cliente = Cliente::find($id);

    $cliente->nombre = $request->input('nombre');
    $cliente->apellido = $request->input('apellido');
    $cliente->telefono = $request->input('telefono');
    $cliente->email = $request->input('email');
    $cliente->direccion = $request->input('direccion');
    $cliente->save();

    $clientes = DB::table('clientes')->get();

    return view('cliente.index', ['clientes' => $clientes]);

}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $cliente = Cliente::find($id);
    $cliente->delete();

    return redirect()->route('cliente.index');
}

}
