@extends('empresa.layout')
@section('title','Datos')
    
@section('contenido')
    
<center> <h1>Datos de la empresa</h1>
<h3>Solo se pueden modificar los datos con * <h3></center>
<form class="needs-validation" novalidate>
    <div class="row">
        <!--======================================== Articulo 1 ========================================-->
        <article class="col-xs-12 col-sm-6 col-md-6">
            <h3>Datos de la empresa</h3>
            <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Razón social</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre,Razón social, Denominación" required>
                <div class="valid-feedback">
                  Bien!
                </div>
            </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom02">Dirección</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Calle o Avenida" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Zona</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Zona" required>
            <div class="valid-feedback">
              Bien!
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
                <label for="validationCustom01">Pagina Web</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="www.example.com" required>
                <div class="valid-feedback">
                  Bien!
                </div>
              </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Objeto de la Empresa</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="A que se dedica la empresa" required>
                    <div class="valid-feedback">
                      Bien!
                    </div>
                  </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Nit</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Número de identificación tributaria" required>
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
                    
        </article>
        <!--======================================== Articulo 2 ========================================-->
        <article class="col-xs-12 col-sm-6 col-md-6">
            <h3>Datos de Contacto</h3>
    <div class="form-row">
        
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Nombre de representante legal</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre de representante legal o propietario" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom01">Celular</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Celular" required>
            <div class="valid-feedback">
              Bien!
            </div>
        </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Telefono</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Telefono" required>
        <div class="valid-feedback">
          Bien!
        </div>
      </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationCustom01">Carnet Identidad</label>
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
        <label for="validationCustom02">Departamento</label>
        <select class="custom-select" required>
          <option value="">Seleccionar Departamento</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>

    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom01">Email</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="example@example.com" required>
            <div class="valid-feedback">
              Bien!
            </div>
        </div>
                
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">Password</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Contraseña" required>
        <div class="valid-feedback">
          Bien!
        </div>
    </div>
    <div class="col-md-2 mb-3">
        <div class="form-check">
            <br>
            <input class="form-check-input" type="checkbox" value="" required>
            <label >
            <br>    Mostrar passowrd
                   </label>
          </div>
         </div>

</div>
    <div class="form-row">
          <div class="col-md-2 mb-3">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>        
          </div>
          <div class="col-md-5 mb-3">  
          </div>
    </div>
        </article>
        <!--======================================== Articulo 3 ========================================-->
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