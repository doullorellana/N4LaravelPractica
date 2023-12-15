<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operadores = Operador::all();
        return view('operador', ['operadores'=>$operadores]);
    }

    /**
     * Display a listing of the resource.
     */
    public function indexAPI()
    {
        return Operador::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $operador = new Operador();
        $operador->nombres = $request->nombres;
        $operador->apellidos = $request->apellidos;
        $operador->direccion = $request->direccion;
        $operador->telefono = $request->telefono;
        $operador->edad = $request->edad;
        $operador->save();
        return "El operador se guardó correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(Operador $operador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operador $operador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operador $operador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operador $operador)
    {
        //
    }
}
