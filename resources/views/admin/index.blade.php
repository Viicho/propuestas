@extends('templates.master')
@section('contenido-principal')
  <div class="container">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('login.index')}}">Login</a></li>
            <li class="breadcrumb-item active" aria-current="page">Administrador</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <ul class="mb-4 d-flex justify-content-center align-items-center nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
        role="tab" aria-controls="home-tab-pane" aria-selected="true">Agregar Estudiante</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
        role="tab" aria-controls="profile-tab-pane" aria-selected="false">Agregar Profesor</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
        role="tab" aria-controls="contact-tab-pane" aria-selected="false">Lista de Estudiantes</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profe-tab" data-bs-toggle="tab" data-bs-target="#profe-tab-pane" type="button"
        role="tab" aria-controls="profe-tab-pane" aria-selected="false">Lista de profesores</button>
    </li>
  </ul>
  <div class="container tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
      <h2 class="mb-4">Agregar estudiante</h2>
      {{-- Form estudiantes --}}
      <form action="{{route('estudiante.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Rut</label>
          <input type="text" name="rut" name="rut" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="mail" class="form-control" name="email" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>
    </div>
    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
      <h2 class="mb-4">Agregar profesor</h2>
      {{-- Form Profesores --}}
      <form action="{{route('profesor.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="mail" class="form-control" name="email" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>
    </div>
    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
      <h2 class="mb-4">Lista de Estudiantes</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($estudiantes as $num => $estudiante)
            <tr>
                <th scope="row">{{$num+1}}</th>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->apellido}}</td>
                <td>{{$estudiante->email}}</td>
                <td class="text-end pe-4"><a href="{{route('administradorEstudiante.show',$estudiante->rut)}}" class="btn btn-success">Ver propuesta</a></td> 
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade" id="profe-tab-pane" role="tabpanel" aria-labelledby="profe-tab" tabindex="0">
      <h2 class="mb-4">Lista de Profesores</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($profesores as $num => $profesor)
            <tr>
                <th scope="row">{{$num+1}}</th>
                <td>{{$profesor->nombre}}</td>
                <td>{{$profesor->apellido}}</td>
                <td>{{$profesor->email}}</td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
@endsection