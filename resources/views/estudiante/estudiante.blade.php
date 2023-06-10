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
              <li class="breadcrumb-item"><a href="{{route('estudiante.lista')}}">Lista estudiantes</a></li>
              <li class="breadcrumb-item active" aria-current="page">Estudiante</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col">
              <h2 class="text-center">Bienvenido {{$estudiante->nombre}}</h2>
              <br>
			        <h3>Tus propuestas</h3>
              <h5>A continuación puedes ver el listado de tus propuestas</h5>
			        <hr>
              <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Agregar Propuesta</button>
              <br><br>
              <table class="table table-borderless table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">PDF</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($propuestas as $num => $propuesta)
                      <tr>
                        <th scope="row">{{$num+1}}</th>
                        <td><a href="{{route('estudiante.pdfGet',$propuesta->id)}}">Descargar</a> </td>
                        <td>{{$propuesta->fecha}}</td>
                        <td>{{$estados[$propuesta->estado]}}</td>
                        <td class="text-end pe-4"><button class="btn btn-success">Revisar comentario</button></td> 
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Propuesta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" class="p-5" enctype="multipart/form-data" action="{{route('estudiante.pdf',$estudiante->rut)}}">
            @csrf
            <input accept=".pdf" type="file" name="documento">
            <br><br>
            <button class="btn btn-success" type="submit">Guardar PDF</button>
          </form>                
        </div>
      </div>
    </div>
    
@endsection