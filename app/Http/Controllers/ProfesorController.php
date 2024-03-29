<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function propuestas(Profesor $profesor)
    {
        $propuestas = Propuesta::all();
         foreach ($propuestas as $num => $propuesta){
            $comentarios = $propuesta->comentariosConPivot;
            foreach ($comentarios as $key => $comentario) {
                if ($comentario->pivot->profesor_id == $profesor->id){
                    $propuesta->comentario = $comentario->pivot->comentario;
                }
            }
        }

        return view('profesor.propuestas',compact(['profesor','propuestas']));
    }



    public function index()
    {
        $profesores = Profesor::orderby('apellido')->orderby('nombre')->get();
        return view('profesor.listaProfesor',compact('profesores'));
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
        $profesor = new Profesor();
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->email = $request->email;
        $profesor->save();

        return redirect()->route('administrador.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('profesor.listaEstudiantesProfe');
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
