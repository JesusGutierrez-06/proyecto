@extends('admin.layout')
@section('title','Registro Empresa')
    
@section('contenido')
    
<center> <h1>Registrar Datos de contacto</h1>
<h3>Los campos con * son obligatorio <h3></center>
  <form action="{{route('contacto.update', $contacto)}}" method="post" >
    @csrf
    @method('put')
    <input type="hidden" name="users_id" value="{{$contacto->users_id}}">
    
<div class="form-row">
  <div class="col-md-3 mb-3">
    <label for="validationCustom01">Nombre de representante legal</label>
  <input type="text" value="{{$contacto->nombre}}" class="form-control" name="nombre" id="validationCustom01" placeholder="Nombre de representante legal o propietario" required>
    <div class="valid-feedback">
      Bien!
    </div>
  </div>

  <div class="col-md-3 mb-3">
    <label for="validationCustom02">Celular</label>
    <input type="text" maxlength="8" value="{{$contacto->nombre}}" name="celular" class="form-control" id="validationCustom02" placeholder="Celular" required>
    <div class="valid-feedback">
      Bien!
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="validationCustom02">Telefono</label>
    <input type="text" maxlength="9"value="{{$contacto->nombre}}" name="telefono" class="form-control" id="validationCustom02" placeholder="Telefono" required>
    <div class="valid-feedback">
      Bien!
    </div>
  </div>
</div>
<div class="form-row">
    <div class="col-md-5 mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">//
             Estoy de acuerdo con los terminos y condiciones
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
         </div>
      <div class="col-md-2 mb-3">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>        
      </div>
      <div class="col-md-5 mb-3">  
      </div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
}, false);
})();
</script>

@endsection