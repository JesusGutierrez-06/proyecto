@extends('estudiante.layout')
@section('title','Ofertas')
    
@section('contenido')

<center>
    <h3>Lista de Ofertas laborales </h3>
</center>
<form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
  <i class="fa fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
    aria-label="Search">
</form>
<br>       
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
                <th scope="col">Acciones</th>
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
                <td><center><a href="/estudiante_detalle_oferta" ><img src="{{asset('/static/assets/img/detalles.png')}}"></center></a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Tecnologico Santa Cruz.</td>
                <td>Soporte Técnico</td>
                <td>Reparación de equipos</td>
                <td>2020-03-02</td>
                <td>Ninguno</td>
                <td>Sistemas</td>
                <td><center><a href="/estudiante_detalle_oferta" ><img src="{{asset('/static/assets/img/detalles.png')}}"></center></a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Tecnologico Santa Cruz.</td>
                <td>Soporte Técnico</td>
                <td>Reparación de equipos</td>
                <td>2020-03-02</td>
                <td>Ninguno</td>
                <td>Sistemas</td>
                <td><center><a href="/estudiante_detalle_oferta" ><img src="{{asset('/static/assets/img/detalles.png')}}"></center></a></td>
              </tr>
            </tbody>
          </table>
<br>

@endsection