@php
$estados = [0 => 'Esperando revisión',1=>'Modificar propuesta',2=>'Rechazado',3=>'Aceptado'];
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
              <h5>A continuación puedes ver el listado de las propuestas</h5>
			  <hr>
              <br><br>
              <table class="table table-borderless table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Propuesta</th>
                    <th scope="col">Estudiante</th>
                    <th scope="col">Estado</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($propuestas as $num => $propuesta)
                      <tr>
                        <th scope="row">{{$num+1}}</th>
                        <td><a href="{{route('estudiante.pdfGet',$propuesta->id)}}">Descargar</a></td>
                        <td>{{$propuesta->estudiante->nombre}} {{$propuesta->estudiante->apellido}}</td>
                        <td>{{$estados[$propuesta->estado]}}</td>
                        <td class="text-end pe-4">
                          <button data-bs-toggle="modal" data-bs-target="#modalAgregar{{$propuesta->id}}" class="btn btn-primary">Agregar comentario</button> 
                          <button data-bs-toggle="modal" data-bs-target="#modalVer{{$propuesta->id}}" class="btn btn-primary">Ver comentario</button> 
                        </td> 
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    @foreach ($propuestas as $num => $propuesta)
    <div class="modal fade" id="modalAgregar{{$propuesta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Comentario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="{{route('profesor_propuesta.store',[$profesor->id,$propuesta->id])}}"  class="p-5">
            @csrf
            <textarea class="form-control" name="comentario" rows="10"></textarea>
            <br>
            <button class="btn btn-success" type="submit">Guardar comentario</button>
          </form>                
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalVer{{$propuesta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Comentario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="p-5">
            {{$propuesta->comentario}}      
          </div>  
        </div>
      </div>
    </div>
    @endforeach

@endsection