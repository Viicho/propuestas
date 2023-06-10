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
          <li class="breadcrumb-item"><a href="{{route('administrador.index')}}">Administrador</a></li>
          <li class="breadcrumb-item">Lista de estudiantes</li>
        </ol>
        </nav>
      </div>
      </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col">
              <br>
              <h3>Propuestas de {{$estudiante->nombre}}</h3>
              <h5>A continuación puedes ver el listado de las propuestas</h5>
              <hr>
              <table class="table table-borderless table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">PDF</th>
                    <th scope="col">Estado</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($propuestas as $num => $propuesta)
                      <tr>
                        <th scope="row">{{$num+1}}</th>
                        <td><a href="{{route('estudiante.pdfGet',$propuesta->id)}}">Descargar</a></td>
                        <td>{{$estados[$propuesta->estado]}}</td>
                        <td class="text-end pe-4">
                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$propuesta->id}}">
                            Cambiar estado
                        </button>
                        </td> 
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@foreach ($propuestas as $num => $propuesta)
  <div class="modal fade" id="exampleModal{{$propuesta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('administrador.update',$propuesta->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cambiar estado de la propuesta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Estado</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="estado_revision" value="0" @php if ($propuesta->estado === 0) {echo "checked";} @endphp>
                                    <label class="form-check-label" for="estado_revision">
                                        Esperando revision
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="estado_modificar" value="1" @php if ($propuesta->estado === 1) {echo "checked";} @endphp>
                                    <label class="form-check-label" for="estado_modificar">
                                        Modificar propuesta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="estado_rechazado" value="2" @php if ($propuesta->estado === 2) {echo "checked";} @endphp>
                                    <label class="form-check-label" for="estado_rechazado">
                                        Rechazado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="estado_aceptado" value="3" @php if ($propuesta->estado === 3) {echo "checked";} @endphp>
                                    <label class="form-check-label" for="estado_aceptado">
                                        Aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
            </form>
        </div>
    </div>
  </div>
@endforeach
@endsection