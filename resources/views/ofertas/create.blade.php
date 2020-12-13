@extends('empresa.layout')
@section('title', 'Registro Oferta')

@section('contenido')
    <center>
        <h1>Publicar Oferta Laboral</h1>
        <h3>Los campos con * son obligatorio <h3>
    </center>
    <br>
    <form action="{{ route('ofertas.store') }}" method="post">
        @csrf
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Titulo de la oferta laboral</label>
                <input type="text" class="form-control" name="titulo" placeholder="Nombre de la oferta laboral">
            </div>
            <div class="col-md-4 mb-3">
                <label>Fecha de Finalización de oferta</label>
                <div class="input-group">
                    <input type="text" class="form-control datepicker" name="fechafin">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                {{-- <input type="text" class="form-control"
                    placeholder="Fecha de fin de publicación"> --}}
                <div class="valid-feedback">
                    Bien!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="example@example.com">
                <div class="valid-feedback">
                    Bien!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Celular</label>
                <input type="number" class="form-control" name="celular" placeholder="Celular">
            </div>
            <div class="col-md-4 mb-3">
                <label>Telefono</label>
                <input type="number" class="form-control" name="telefono" placeholder="Telefono">
                <div class="valid-feedback">
                    Bien!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Descripción de la oferta laboral</label>
                <input type="text" class="form-control" name="actividades" placeholder="Función a realizar">
                <div class="valid-feedback">
                    Bien!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2 mb-3">
                <label>Vacantes</label>
                <input type="number" class="form-control" name="vacantes" placeholder="# cantidad de vacantes">
            </div>
            <div class="col-md-2 mb-3">
                <label>Salario</label>
                <input type="text" class="form-control" name="salario" placeholder="Salario">
            </div>
            <div class="col-md-2 mb-3">
                <label>Carrera</label>
                <select class="custom-select" id="departamento" name="carreraid">
                    <option value="">Seleccionar Carrera</option>
                    @foreach ($carreras as $carrera)
                        <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label>Requisitos</label>
                <textarea name="requisito" class="form-control" cols="30" rows="01"
                    placeholder="Requisitos para la oferta"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-5 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                    <label class="form-check-label" for="invalidCheck">//
                        Estoy de acuerdo con los terminos y condiciones
                    </label>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <button class="btn btn-primary" type="submit">Publicar</button>
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

    <script>
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
            autoclose: true
        });

    </script>


@endsection
