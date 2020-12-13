@extends('estudiante.layout')
@section('title','Ofertas')
    
@section('contenido')

<center>
    <h3>Lista de postulaciones a Ofertas laborales </h3>
</center>

        <table style="text-align: center" class="table table-hover table-responsive-xl">
            <thead class="table-success">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha publicada</th>
                <th scope="col">Requisitos</th>
                <th scope="col">Carrera</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Tecnologico Santa Cruz.</td>
                <td>Soporte Técnico</td>
                <td>Reparación de equipos</td>
                <td>2020-03-02</td>
                <td>Ninguno</td>
                <td>Sistemas</td>
                <td style="color: blue">Aún no te ha seleccionado</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Tecnologico Santa Cruz.</td>
                <td>Soporte Técnico</td>
                <td>Reparación de equipos</td>
                <td>2020-03-02</td>
                <td>Ninguno</td>
                <td>Sistemas</td>
                <td style="color:darkgreen"><a href="#"><img src="{{asset('/static/assets/img/aprobado.png')}}" width="30px"> te han seleccionado</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Tecnologico Santa Cruz.</td>
                <td>Soporte Técnico</td>
                <td>Reparación de equipos</td>
                <td>2020-03-02</td>
                <td>Ninguno</td>
                <td>Sistemas</td>
                <td style="color: blue">Aún no te ha seleccionado</td>
              </tr>
            </tbody>
          </table>
<br>

@endsection