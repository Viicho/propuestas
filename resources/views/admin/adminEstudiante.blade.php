@php
$estados = [0 => 'Esperando revision',1=>'Modificar Propuesta',2=>'Rechazado',3=>'Aceptado'];
@endphp
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estudiante.css')}}">
  </head>
  <body>
    <div class="container-fluid ">
        <div class="row">
            <header class="p-3">
              <h2>Propuestas de {{$estudiante->nombre}}</h2>
              <h3>Sus propuestas</h3>
            </header>
            <hr>
            <ul class="d-flex gap-2 p-4">
              <li><a href="{{route('administrador.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Volver</a></li>
            </ul>
            <div class="col">
              <table class="table table-borderless table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre Propuesta</th>
                    <th scope="col">PDF</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($propuestas as $num => $propuesta)
                      <tr>
                        <th scope="row">{{$num+1}}</th>
                        <td>{{$propuesta->documento}}</td>
                        <td>Otto</td>
                        <td>{{$estados[$propuesta->estado]}}</td>
                        <td>
                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$propuesta->id}}">
                            Cambiar estado
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$propuesta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('administrador.update',$propuesta->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div>
                                            {{$propuesta}}
                                        </div>
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cambiar estado de la propuesta</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Estado</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="estado" id="estado_revision" value="0" checked>
                                                            <label class="form-check-label" for="estado_revision">
                                                                Esperando revision
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="estado" id="estado_modificar" value="1">
                                                            <label class="form-check-label" for="estado_modificar">
                                                                Modificar propuesta
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="estado" id="estado_rechazado" value="2">
                                                            <label class="form-check-label" for="estado_rechazado">
                                                                Rechazado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="estado" id="estado_aceptado" value="3">
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
                        </td> 
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>