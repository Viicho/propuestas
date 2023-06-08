<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Propuesta;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function lista(){
        $estudiantes = Estudiante::all();
        return view('estudiante.listaEstudiante',compact('estudiantes'));
    }

    public function index()
    {
        return view("estudiante.estudiante");
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
        $estudiante = new Estudiante();
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->rut = $request->rut;
        $estudiante->email = $request->email;

        $estudiante->save();

        return redirect()->route('administrador.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(String $rut)
    {   
        $estudiante = Estudiante::find($rut);
        $propuestas = Propuesta::where('estudiante_rut',$rut)->get();
        return view('estudiante.estudiante',compact(['estudiante','propuestas']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
