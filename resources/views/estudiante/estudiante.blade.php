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
              <h2>Bienvenido {{$estudiante->nombre}}</h2>
              <h3>Tus propuestas</h3>
            </header>
            <hr>
            <ul class="d-flex gap-2 p-4">
              <li><a href="{{route('estudiante.lista')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Volver</a></li>
              <li><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Agregar Propuesta</button></li>
            </ul>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Propuesta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form class="p-5" action="">
                    @csrf
                    <input type="file" name="archivo_pdf">
                    <button type="submit">Guardar PDF</button>
                </form>                
                </div>
              </div>
            </div>
            <div class="col">
              <table class="table table-borderless table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre Propuesta</th>
                    <th scope="col">PDF</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Comentarios</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($propuestas as $num => $propuesta)
                      <tr>
                        <th scope="row">{{$num+1}}</th>
                        <td>{{$propuesta->documento}}</td>
                        <td>Otto</td>
                        <td>{{$estados[$propuesta->estado]}}</td>
                        <td><a class="btn btn-success">revisar</a></td> 
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>