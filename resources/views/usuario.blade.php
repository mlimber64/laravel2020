@extends('welcome')

@section('seccion')
@include('usuario.modalcreate')

<h1>Listado de Usuarios</h1>

<br>
<br>
<div class="table-responsive">
<div class="container">
    @if(session('flash'))
     <div class="alert alert-success" role="alert" id="alert">
            <strong></strong>{{session('flash')}}
            <button type="button" class="close" data-data-dismiss="alert" alert-label="Close">
                <span arian-aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
</div>
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
      <th>Acciones</th>
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
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUsuario{{$item->id}}">
             Editar
        </button>
        <div class="modal fade" id="editUsuario{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
         
      
      </div>
    </div>
  </div>
</div>
      </td>
    </tr>
    
    @empty
    <li>No hay usuarios registrados.</li>
    @endforelse
  </tbody>
</table>
</div>
<!--modal edit-->

<script>
$("#alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#alert").slideUp(500);
});
</script>

@endsection