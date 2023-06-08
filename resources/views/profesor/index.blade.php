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
              <h3>Selecciona tu nombre</h3>
            </header>
            <hr>
              <ul class="d-flex gap-2 p-4">
                <li><a href="{{route('login.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Volver</a></li>
              </ul>
            <div class="col">
              <table class="table table-borderless table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($profesores as $num => $profesor)
                      <tr>
                        <th scope="row">{{$num+1}}</th>
                        <td>{{$profesor->nombre}}</td>
                        <td>{{$profesor->apellido}}</td>
                        <td>{{$profesor->email}}</td>
                        <td><a href="#" class="btn btn-success">Entrar</a></td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>