@extends('welcome')

@section('seccion')
@include('usuario.modalcreate')
<h1>Listado de Usuarios</h1>

<br>
<br>
<div class="table-responsive">
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Nro. Documento</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Dirección</th>
    </tr>
  </thead>
  <tbody>
  
  @forelse($usuarios as $item)
  <tr>

      <th scope="row">{{$item ->id}}</th>
      <td>{{$item ->nombre}}</td>
      <td>{{$item ->apellido}}</td>
      <td>{{$item ->nro_doc}}</td>
      <td>{{$item ->email}}</td>
      <td>{{$item ->fecha_nac}}</td>
      <td>{{$item ->direccion}}</td>
      
    </tr>
    
    @empty
    <li>No hay usuarios registrados.</li>
    @endforelse
  </tbody>
</table>
</div>

@endsection