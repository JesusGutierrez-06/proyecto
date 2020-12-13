@extends('estudiante.layout')
@section('title','Estudios')
    
@section('contenido')

<center> <h1>Datos de Experiencia Laboral</h1>        </center>

    <h3>Lista de Experiencia Laboral </h3>

        <table style="text-align: center" class="table table-hover table-responsive-xl">
            <thead class="table-success">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Institución</th>
                <th scope="col">Cargo laboral</th>
                <th scope="col">Fecha de inicio</th>
                <th scope="col">Fecha de finalización</th>
                <th scope="col">Razón de salida</th>
                <th scope="col">Actividad</th>
                <th scope="col">Area</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Tecnologico Santa Cruz.</td>
                <td>Técnico de Software</td>
                <td>2015-03-02</td>
                <td>2016-03-02</td>
                <td>culminación de contrato</td>
                <td>Reparación e instalación de software</td>
                <td>Sistemas</td>
                <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Caja Nacional de Salud.</td>
                <td>Técnico de Software</td>
                <td>2015-03-02</td>
                <td>2016-03-02</td>
                <td>culminación de contrato</td>
                <td>Reparación e instalación de software</td>
                <td>Sistemas</td>
                <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Instituto E.N.S.E.C.</td>
                <td>Técnico de Software</td>
                <td>2015-03-02</td>
                <td>2016-03-02</td>
                <td>culminación de contrato</td>
                <td>Reparación e instalación de software</td>
                <td>Sistemas</td>
                <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
              </tr>
            </tbody>
          </table>
<br>

<center> <h1>Registrar Experiencia Laboral</h1>
    <h3>Los campos con * son obligatorio <h3></center>
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Institución</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre de la empresa" required>
                <div class="valid-feedback">
                  Bien!
                </div>
            </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom02">Cargo</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Puesto laboral" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom01">Fecha de ingreso</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="2000-01-01" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom01">Fecha de finalización</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="2000-01-01" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>

        </div>
    
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Motivo de salida</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Razón de salida" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Actividades</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Funciones que realizaba" required>
            <div class="valid-feedback">
              Bien!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom02">Estado Civil</label>
            <select class="custom-select" required>
              <option value="">Seleccionar su estado civil</option>
              <option value="1">Soltero</option>
              <option value="2">Casado</option>
              <option value="3">Viudo</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>

        </div>
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        
                    </div>
                        <div class="col-md-2 mb-3">
                        <br><button class="btn btn-primary" type="submit">Guardar</button>
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