@extends('estudiante.layout')
@section('title','Datos General')
    
@section('contenido')
    
<center> <h1>Datos general del estudiante</h1></center>
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
        <div class="col-md-5 mb-3">
            <div class="form-check">
              </div>
             </div>
          <div class="col-md-2 mb-3">
            <button class="btn btn-primary" type="submit">Editar</button>
        </form>        
          </div>
          <div class="col-md-5 mb-3">
            
          </div>
    </div>
  
    <h3>Lista de Estudios técnicos </h3>

    <table style="text-align: center" class="table table-hover table-responsive-xl">
        <thead class="table-success">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Semestre</th>
            <th scope="col">Institución</th>
            <th scope="col">Carrera</th>
            <th scope="col">Fecha de inicio</th>
            <th scope="col">Fecha de finalización</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>5to Semestre</td>
            <td>Tecnologico Santa Cruz.</td>
            <td>Contaduria</td>
            <td>2017-02-1</td>
            <td>Cursando</td>
            <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>4to Semestre</td>
            <td>E.N.S.E.C.</td>
            <td>Informatica</td>
            <td>2018-02-1</td>
            <td>Cursando</td>
            <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>5to Semestre</td>
            <td>E.N.S.E.C.</td>
            <td>Administración</td>
            <td>2017-06-1</td>
            <td>Cursando</td>
            <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
          </tr>
        </tbody>
      </table>
<br>

<h3>Lista de Capacitaciones ingresado </h3>

<table style="text-align: center" class="table table-hover table-responsive-xl">
<thead class="table-success">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Titulo</th>
    <th scope="col">Institución</th>
    <th scope="col">Tipo de Capacitacion</th>
    <th scope="col">Fecha de inicio</th>
    <th scope="col">Fecha de finalización</th>
    <th scope="col">Area de estudio</th>
    <th scope="col">Acciones</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>Excel Avanzado</td>
    <td>Tecnologico Santa Cruz.</td>
    <td>Tecnología</td>
    <td>2017-02-01</td>
    <td>2017-06-01</td>
    <td>Ofimática</td>
    <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>Programa espacial Boliviano</td>
    <td>Tecnologico Santa Cruz.</td>
    <td>Tecnología</td>
    <td>2017-02-01</td>
    <td>2017-03-01</td>
    <td>Ofimática</td>
    <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>Power Point Básico</td>
    <td>Tecnologico Santa Cruz.</td>
    <td>Tecnología</td>
    <td>2017-06-01</td>
    <td>2017-12-01</td>
    <td>Ofimática</td>
    <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
  </tr>
</tbody>
</table>
<br>
<h3> Lista de Idiomas</h3>
<table style="text-align: center" class="table table-hover table-responsive-xl">
    <thead class="table-success">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Idioma</th>
        <th scope="col">Hablar</th>
        <th scope="col">Escribir</th>
        <th scope="col">Leer</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Coreano</td>
        <td>Avanzado</td>
        <td>Básico</td>
        <td>Intermedio</td>
        <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Frances</td>
        <td>Avanzado</td>
        <td>Básico</td>
        <td>Intermedio</td>
        <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Ingles</td>
        <td>Avanzado</td>
        <td>Básico</td>
        <td>Intermedio</td>
        <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
      </tr>
    </tbody>
  </table>
<br>
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