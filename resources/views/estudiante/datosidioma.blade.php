@extends('estudiante.layout')
@section('title','Idioma')
    
@section('contenido')
    
<center> <h1>Datos de Idiomas</h1>        </center>

    <h3>Lista de Idiomas agregados</h3>

<form class="needs-validation" novalidate>
  <div class="row">
      <!--======================================== Articulo 1 ========================================-->
      <article class="col-xs-12 col-sm-6 col-md-6">
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

    </article>
      <!--======================================== Articulo 2 ========================================-->
      <article class="col-xs-12 col-sm-6 col-md-6">
          <h3>Agregar Idiomas</h3>
          <form class="needs-validation" novalidate>
            <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Idioma</label>
                    <select class="custom-select" required>
                      <option value="">Seleccionar Idioma</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                    
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="validationCustom02">Hablar</label>
        <select class="custom-select" required>
          <option value="">Seleccionar</option>
          <option value="1">Básico</option>
          <option value="2">Intermedio</option>
          <option value="3">Avanzado</option>
        </select>
        <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationCustom02">Escribir</label>
        <select class="custom-select" required>
            <option value="">Seleccionar</option>
            <option value="1">Básico</option>
            <option value="2">Intermedio</option>
            <option value="3">Avanzado</option>
          </select>
          <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationCustom02">Leer</label>
        <select class="custom-select" required>
            <option value="">Seleccionar</option>
            <option value="1">Básico</option>
            <option value="2">Intermedio</option>
            <option value="3">Avanzado</option>
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