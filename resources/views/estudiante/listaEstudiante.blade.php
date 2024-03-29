@extends('templates.master')
@section('contenido-principal')
	<div class="container">
		<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('login.index')}}">Login</a></li>
				<li class="breadcrumb-item active" aria-current="page">Estudiantes</li>
			</ol>
			</nav>
		</div>
		</div>
	</div>
    <div class="container ">
        <div class="row">
            <div class="col">
			  <br>
			  <h3>Selecciona tu nombre</h3>
			  <h5>Busca tu nombre en el listado y haz clic en el boton <i>Ingresar</i> para ver tus propuestas</h5>
			  <hr>
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
                  @foreach ($estudiantes as $num => $estudiante)
                    <tr>
                        <th scope="row">{{$num+1}}</th>
                        <td>{{$estudiante->nombre}}</td>
                        <td>{{$estudiante->apellido}}</td>
                        <td>{{$estudiante->email}}</td>
                        <td class="text-end pe-4"><a href="{{route('estudiante.show',$estudiante->rut)}}" class="px-2 btn btn-success">Ingresar</a></td> 
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection