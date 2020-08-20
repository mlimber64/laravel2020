<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUsuario" with="15px">
<span class="oi oi-plus"></span>
</button>


<!-- Modal -->
<div class="modal fade" id="createUsuario" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Registrar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('usuario.store') }}">
        {!!csrf_field()!!}


    <div class="form-group">
        <label for="id_tipo">Tipo Documento :</label>
        <select name="id_tipo" >
            <option value="1">DNI</option>
            <option value="2">Carne Extranjeria</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre"  placeholder="Ingrese Nombre" value="{{old('nombre')}}" required>
    </div>
    
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" placeholder="Ingrese Apellido"  value="{{old('apellido')}}" required>
    </div>
    
    <div class="form-group">
        <label for="nro_doc">Numero Documento: </label>
        <input type="text" name="nro_doc" placeholder="Ingrese nro documento"  value="{{old('nro_doc')}}" required>
    </div>

    <div class="form-group">
        <label for="email">Correo Electronico</label>
        <input type="email" name="email" placeholder="name@example.com"  value="{{old('email')}}" required>
    </div>
    
    <div class="form-group">
        <label for="fecha_nac">Fecha Nacimiento</label>
        <input type="text" name="fecha_nac" id="fecha_nac">
    </div>
   
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" placeholder="Ingrese direccion" value="{{old('direccion')}}" required>
    </div>

        <button class="btn btn-success" type="submit">Agregar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    
</form>
      </div>
      <div class="modal-footer">
         
      
      </div>
    </div>
  </div>
</div>

<script>


    $("#fecha_nac").datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true
    });
</script>