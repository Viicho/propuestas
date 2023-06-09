@extends('templates.master')
@section('contenido-principal')
	<div class="container">
		<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('login.index')}}">Login</a></li>
				<li class="breadcrumb-item active" aria-current="page">Profesores</li>
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
			      <h5>Busca tu nombre en el listado y haz clic en el boton <i>Ingresar</i> para ver todas las propuestas</h5>
			      <hr>
              <table class="table table-borderless table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
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
                        <td class="text-end pe-4"><a href="{{route('profesor.propuestas',$profesor->id)}}" class="px-2 btn btn-success">Ingresar</a></td> 
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection