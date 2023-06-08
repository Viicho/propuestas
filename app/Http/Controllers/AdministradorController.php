<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Propuesta;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $profesores = Profesor::all();
        $estudiantes = Estudiante::all();
        return view("admin.admin",compact(['estudiantes','profesores']));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $rut)
    {
        $propuestas = Propuesta::where('estudiante_rut',$rut)->get();
        $estudiante = Estudiante::find($rut);
        return view('admin.adminEstudiante',compact(['estudiante','propuestas']));
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
    public function update(Request $request, String $id)
    {
        $propuesta = Propuesta::where('id',$id)->get()[0];
        $propuesta->estado = $request->estado;
        $propuesta->save();
        return redirect()->route('administrador.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
