@extends('estudiante.layout')
@section('title','Estudios')
    
@section('contenido')
    
<center> <h1>Datos de estudios</h1>        </center>

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
<form class="needs-validation" novalidate>
  <div class="row">
      <!--======================================== Articulo 1 ========================================-->
      <article class="col-xs-12 col-sm-6 col-md-6">
          <h3>Estudios técnicos</h3>
          <div class="form-row">
          <div class="col-md-6 mb-3">
              <label for="validationCustom01">Institución</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre de la institución" required>
              <div class="valid-feedback">
                Bien!
              </div>
          </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom02">Semestre</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="5to,6to,finalizado,etc..." required>
          <div class="valid-feedback">
            Bien!
          </div>
        </div>
        
      </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Fecha de Inicio</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="2000-01-02" required>
              <div class="valid-feedback">
                Bien!
              </div>
            </div>
            <div class="col-md-6 mb-3">
                  <label for="validationCustom02">Carrera</label>
                  <select class="custom-select" required>
                    <option value="">Seleccionar Carrera</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
              </div>
          </div>
              <div class="form-row">
                <div class="col-md-5 mb-3">  
                </div>
                <div class="col-md-2 mb-3">
              <button class="btn btn-primary" type="submit">Guardar</button>
          </form>        
            </div>
            <div class="col-md-5 mb-3">  
            </div>
      </div>
                      
      </article>
      <!--======================================== Articulo 2 ========================================-->
      <article class="col-xs-12 col-sm-6 col-md-6">
          <h3>Capacitaciones / Cursos / Certificados</h3>
          <form class="needs-validation" novalidate>
            <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Titulo</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre de la Capacitación" required>
      <div class="valid-feedback">
        Bien!
      </div>
    </div>
      <div class="col-md-3 mb-3">
          <label for="validationCustom01">Institución</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre de la institución" required>
          <div class="valid-feedback">
            Bien!
          </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Area de estudio</label>
        <select class="custom-select" required>
          <option value="">Seleccionar carrera</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
  </div>
  <div class="form-row">
      <div class="col-md-3 mb-3">
          <label for="validationCustom01">Fecha de finalización</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="2000-01-31" required>
          <div class="valid-feedback">
            Bien!
          </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Tipo de Capacitacion</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Salud, Tecnologíca,etc..." required>
        <div class="valid-feedback">
          Bien!
        </div>
    </div>
  
    <div class="col-md-3 mb-3">
      <label for="validationCustom02">Fecha Inicio de la Capacitacion</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="2000-01-01" required>
      <div class="valid-feedback">
        Bien!
      </div>
    </div>

  </div>

  <div class="form-row">
    <div class="col-md-5 mb-3">  
    </div>
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