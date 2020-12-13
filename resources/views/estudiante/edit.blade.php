@extends('admin.layout')
@section('title', 'Registro Candidato')

@section('contenido')

    <center>
        <h1>Editar Datos Personales</h1>
        <h3>Los campos con * no son editables <h3>
    </center>
    <form action="{{ route('estudiante.update', $estudiante) }}" method="post">
        @csrf
        @method('put')
        <div class="form-row">
          <input type="hidden" name="users_id" value="{{$estudiante->users_id}}">
          <div class="col-md-4 mb-3">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $estudiante->nombre }}"
                    placeholder="Nombre">
            </div>
            <div class="col-md-4 mb-3">
                <label>Apellido Paterno</label>
                <input type="text" class="form-control" name="apellidop" value="{{ $estudiante->apellidop }}"
                    placeholder="Apellido Paterno">
            </div>
            <div class="col-md-4 mb-3">
                <label>Apellido Materno</label>
                <input type="text" class="form-control" name="apellidom" value="{{ $estudiante->apellidom }}"
                    placeholder="Apellido Materno">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Matricula</label>
                <input type="text" class="form-control" name="matricula" value="{{ $estudiante->matricula }}"
                    placeholder="Matriula estudiantil">
            </div>
            <div class="col-md-4 mb-3">
                <label>Celular</label>
                <input type="text" class="form-control" name="celular" value="{{ $estudiante->celular }}"
                    placeholder="Celular">
            </div>
            <div class="col-md-4 mb-3">
                <label>Telefono</label>
                <input type="text" class="form-control" name="telefono" value="{{ $estudiante->telefono }}"
                    placeholder="Telefono">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Documento de Identidad</label>
                <input type="text" class="form-control" name="dni" value="{{ $estudiante->dni }}" placeholder="C.I.">
            </div>
            <div class="col-md-2 mb-3">
              <label>Fecha Nacimiento</label>
              <input type="text" class="form-control" name="fechanac" value="{{ $estudiante->fechanac }}"
                  placeholder="2000-11-01">
          </div>
          <div class="col-md-2 mb-3">
                <label>Genero</label>
                <select class="custom-select" name="genero_id">
                  @foreach ($genero as $generos)
                      @if ($generos->id == $estudiante->genero_id)
                          <option selected value="{{ $generos->id }}">{{ $generos->nombre }}</option>
                      @else
                          <option value="{{ $generos->id }}">{{ $generos->nombre }}</option>
                      @endif
                  @endforeach
                </select>
            </div>

            <div class="col-md-2 mb-3">
                <label>Grupo sanguineo</label>

                <select class="custom-select" name="tipo_sangre_id">
                    {{-- <option value="{{ $estudiante->tipo_sangreid }}">
                        {{ $estudiante->tipo_sangreid }}
                    </option> --}}
                    <option value="1">O +</option>
                    <option value="2">O -</option>
                    <option value="3">AB +</option>
                    <option value="3">AB -</option>
                </select>
            </div>
            <div class="col-md-2 mb-3">
              <label>Estado Civil</label>
              <select class="custom-select" name="estado_civil_id">
                  @foreach ($estado_civil as $estado_civiles)
                      @if ($estado_civiles->id == $estudiante->estado_civil_id)
                          <option selected value="{{ $estado_civiles->id }}">{{ $estado_civiles->nombre }}</option>
                      @else
                          <option value="{{ $estado_civiles->id }}">{{ $estado_civiles->nombre }}</option>
                      @endif
                  @endforeach
              </select>
          </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Departamento</label>
                <select class="custom-select" id="departamento_id" name="departamento_id">

                    @foreach ($provincia as $provincias)
                        @if ($provincias->id == $estudiante->provincia_id)
                            @foreach ($departamento as $departamentos)
                                @if ($departamentos->id == $provincias->id)
                                    <option selected value="{{ $departamentos->id }}">{{ $departamentos->nombre }}</option>
                                @else
                                    <option value="{{ $departamentos->id }}">{{ $departamentos->nombre }}</option>
                                @endif

                            @endforeach
                        @else

                        @endif

                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label>Provincia</label>
                <select class="custom-select" id="provincia_id" name="provincia_id">
                    @foreach ($provincia as $provincias)
                        @if ($provincias->id == $estudiante->provincia_id)
                            <option selected value="{{ $provincias->id }}">{{ $provincias->nombre }}</option>
                        @else
                            <option value="{{ $provincias->id }}">{{ $provincias->nombre }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3">
              <label>Domicilio</label>
              <input type="text" class="form-control" name="direccion" value="{{ $estudiante->direccion }}"
                  placeholder="Barrio / Calle">
          </div>

          </div>


        <div class="form-row">
            <div class="col-md-4 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                    <label class="form-check-label">//
                        Estoy de acuerdo con los terminos y condiciones
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <button class="btn btn-primary" type="submit">Actualizar Información</button>
    </div>
    <div class="col-md-4 mb-3">

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
