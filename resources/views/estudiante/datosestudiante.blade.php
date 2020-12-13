@extends('estudiante.layout')
@section('title','datos')
    
@section('contenido')
    
<center> <h1>Datos del estudiante</h1>
    <h3>Solo se pueden modificar los datos con * <h3></center>
<form class="needs-validation" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required>
            <div class="valid-feedback">
              Bien!
            </div>
        </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Apellido Paterno</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido Paterno" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Apellido Materno</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Apellido Materno" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
    </div>

    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Celular</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Celular" required>
            <div class="valid-feedback">
              Bien!
            </div>
        </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Telefono</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Telefono" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Fecha Nacimiento</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="2000-11-01" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Documento de Identidad</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="C.I." required>
            <div class="valid-feedback">
              Bien!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Genero</label>
          
            <select class="custom-select" required>
              <option value="">Seleccionar Genero</option>
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
              <option value="3">Otros...</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
        
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Grupo sanguineo</label>
      
        <select class="custom-select" required>
          <option value="">Seleccionar Tipo de Sangre</option>
          <option value="1">O +</option>
          <option value="2">O -</option>
          <option value="3">AB +</option>
          <option value="3">AB -</option>
        </select>
        <div class="invalid-feedback">Example invalid custom select feedback</div>
      </div>    
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Departamento</label>
          
            <select class="custom-select" required>
              <option value="">Seleccionar Departamento</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
          <div class="col-md-4 mb-3">
              <label for="validationCustom02">Provincia</label>
            
              <select class="custom-select" required>
                <option value="">Seleccionar Provincia</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Municipio</label>
                <select class="custom-select" required>
                  <option value="">Seleccionar Municipio</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
              </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Zona</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Zona" required>
                    <div class="valid-feedback">
                      Bien!
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Domicilio</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Barrio / Calle" required>
                    <div class="valid-feedback">
                      Bien!
                    </div>
                  </div>
                  <div class="col-md-2 mb-3">
                  <label for="validationCustom02">Estado Civil</label>
                  <select class="custom-select" required>
                    <option value="">Seleccionar su estado civil</option>
                    <option value="1">Soltero</option>
                    <option value="2">Casado</option>
                    <option value="3">Viudo</option>
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationCustom01">Matricula</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Matriula estudiantil" required>
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
            <button class="btn btn-primary" type="submit">Guardar</button>
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