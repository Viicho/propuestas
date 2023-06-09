@php
$estados = [0 => 'Esperando revision',1=>'Modificar Propuesta',2=>'Rechazado',3=>'Aceptado'];
@endphp
@extends('templates.master')
@section('contenido-principal')
    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('login.index')}}">Login</a></li>
              <li class="breadcrumb-item"><a href="{{route('profesor.lista')}}">Lista profesores</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profesor</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col">
              <h2 class="text-center">Bienvenido {{$profesor->nombre}}</h2>
              <br>
			  <h3>Propuestas</h3>
              <h5>A continuacion puedes ver el listado de las propuestas</h5>
			  <hr>
              <br><br>
              <table class="table table-borderless table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre Propuesta</th>
                    <th scope="col">Estudiante</th>
                    <th scope="col">Estado</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($propuestas as $num => $propuesta)
                      <tr>
                        <th scope="row">{{$num+1}}</th>
                        <td>{{$propuesta->documento}}</td>
                        <td>{{$propuesta->estudiante->nombre}} {{$propuesta->estudiante->apellido}}</td>
                        <td>{{$estados[$propuesta->estado]}}</td>
                        <td class="text-end pe-4"><a class="btn btn-success">Agregar comentario</a> <a class="btn btn-success">Ver comentarios</a></td> 
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection