@extends('admin.layout')
@section('title', 'Registro Candidato')

@section('contenido')

    <center>
        <h1>Datos Personales</h1>
    </center>
    <div class="form-row">
        <div class="col-md-6 mb-2">

            <table style="text-align: center" class="table table-hover table-responsive-xl">
                <tbody>
                    <tr>
                        <th class="table-color" scope="col">Nombre :</th>
                        <th scope="col">{{ $data['estudiante']->nombre }} {{ $data['estudiante']->apellidop }}
                            {{ $data['estudiante']->apellidom }}
                        </th>
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Matricula :</th>
                        <th scope="col">{{ $data['estudiante']->matricula }}
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Celular/Telf :</th>
                        <th scope="col">{{ $data['estudiante']->celular }} - {{ $data['estudiante']->telefono }}
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Carnet de Identidad :</th>
                        <th scope="col">{{ $data['estudiante']->dni }}
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Genero :</th>
                        <th scope="col"> {{ $data['genero']->nombre }}
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col-md-6 mb-2">

            <table style="text-align: center" class="table table-hover table-responsive-xl">
                <tbody>
                    <tr>
                        <th class="table-color" scope="col">Grupo Sanguineo :</th>
                        <th scope="col">{{ $data['tipo_sangre']->nombre }} </th>
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Fecha Nacimiento :</th>
                        <th scope="col">{{ $data['estudiante']->fechanac }}
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Domicilio :</th>
                        <th scope="col"> {{ $data['estudiante']->direccion }}
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Departamento :</th>
                        <th scope="col"> {{ $data['departamento']->nombre }} - {{ $data['provincia']->nombre }}
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Email :</th>
                        <th scope="col"> {{ $data['users']->email }}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <center>
      <h1>Datos academicos</h1>
  </center>
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
<h3>Lista de idiomas</h3>
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
@endsection
