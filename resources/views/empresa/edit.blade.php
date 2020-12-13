@extends('admin.layout')
@section('title','Registro Empresa')
    
@section('contenido')
    
<center>
    <h1>Editar Datos de la empresa</h1>
    <h3>Los campos con * no son editables <h3>
</center>
<form action="{{ route('empresa.update', $empresa) }}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="users_id" value="{{$empresa->users_id}}">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Razón social</label>
        <input type="text" value="{{$empresa->nombre}}" name="nombre" class="form-control" id="validationCustom01" placeholder="Nombre,Razón social, Denominación" required>
            <div class="valid-feedback">
              Bien!
            </div>
        </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Dirección</label>
      <input type="text" value="{{$empresa->direccion}}" name="direccion" class="form-control" id="validationCustom02" placeholder="Calle o Avenida" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Departamento</label>
        <select class="custom-select" id="departamento" name= "dpto_id" >
            @foreach ($departamento as $departamentos)
            @if ($departamentos->id == $empresa->dpto_id)
                <option selected value="{{ $departamentos->id }}">{{ $departamentos->nombre }}</option>
            @else
                <option value="{{ $departamentos->id }}">{{ $departamentos->nombre }}</option>
            @endif
        @endforeach
        </select>
        <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
  
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Celular</label>
            <input type="text"value="{{$empresa->celular}}" name="celular" class="form-control" id="validationCustom01" placeholder="Celular" required>
            <div class="valid-feedback">
              Bien!
            </div>
        </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Telefono</label>
        <input type="text" value="{{$empresa->telefono}}" name="telefono" class="form-control" id="validationCustom02" placeholder="Telefono" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Pagina Web</label>
        <input type="text" value="{{$empresa->url_pagina}}" name="url_pagina" class="form-control" id="validationCustom01" placeholder="www.example.com" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Objeto de la Empresa</label>
            <input type="text" value="{{$empresa->descripcion}}" name="descripcion" class="form-control" id="validationCustom01" placeholder="A que se dedica la empresa" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nit</label>
        <input type="text"value="{{$empresa->nit}}" name="nit" class="form-control" id="validationCustom01" placeholder="Número de identificación tributaria" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Logo de la empresa</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
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
            <button class="btn btn-primary" type="submit">Actualizar información</button>

          </div>
          <div class="col-md-5 mb-3">  
          </div>
    </div>
</form>        
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