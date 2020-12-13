@extends('empresa.layout')
@section('title','Registro Empresa')
    
@section('contenido')

<center> <h1>Publicar Oferta Laboral</h1>
    <h3>Los campos con * son obligatorio <h3></center>
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Titulo de la oferta laboral</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre de la oferta laboral" required>
                <div class="valid-feedback">
                  Bien!
                </div>
            </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom02">Fecha de Finalización</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Fecha de fin de publicación" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Email</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="example@example.com" required>
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
            <label for="validationCustom01">Descripción de la oferta laboral</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Función a realizar" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-md-2 mb-3">
                <label for="validationCustom01">Vacantes</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="# cantidad de vacantes" required>
                <div class="valid-feedback">
                  Bien!
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <label for="validationCustom01">Salario</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Salario" required>
                <div class="valid-feedback">
                  Bien!
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationCustom02">Contacto</label>
                <select class="custom-select" required>
                  <option value="">Seleccionar Contacto</option>
                  <option value="1">O +</option>
                  <option value="2">O -</option>
                  <option value="3">AB +</option>
                  <option value="3">AB -</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
              </div>    
            
            <div class="col-md-2 mb-3">
                <label for="validationCustom02">Carrera</label>
              
                <select class="custom-select" required>
                  <option value="">Seleccionar Carrera</option>
                  <option value="1">Hombre</option>
                  <option value="2">Mujer</option>
                  <option value="3">Otros...</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Requisitos</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Requisitos para la oferta" required>
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
                <button class="btn btn-primary" type="submit">Publicar</button>
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