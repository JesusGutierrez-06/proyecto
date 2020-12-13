@extends('empresa.layout')
@section('title','Registro Empresa')
    
@section('contenido')
    
<center><h1>Mis Ofertas laborales Registradas</h1></center>

<table style="text-align: center" class="table table-hover table-responsive-xl">
  <thead class="table-success">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Telefeno</th>
        <th scope="col">Celular</th>
        <th scope="col">Fecha de postulación</th>
        <th scope="col">Curriculum Vitae</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Maria</td>
        <td>Mamani</td>
        <td>Suarez</td>
        <td>3342543</td>
        <td>72314532</td>
        <td>2020-10-29</td>
        <td><a href="#" >Ver Curriculum</a></td>
        <td><a href="#" >Seleccionar</a></td>
          </tr>
      <tr>
        <th scope="row">2</th>
        <td>jose</td>
        <td>Serrudo</td>
        <td>Perez</td>
        <td>3342543</td>
        <td>72314532</td>
        <td>2020-10-28</td>
        <td><a href="#" >Ver Curriculum</a></td>
        <td><a href="#" >Seleccionar</a></td>
    </tr>
      <tr>
        <th scope="row">3</th>
        <td>elizabetth</td>
        <td>Guzman</td>
        <td>Marquez</td>
        <td>3342543</td>
        <td>72314532</td>
        <td>2020-10-30</td>
        <td><a href="#" >Ver Curriculum</a></td>
        <td><a href="#" >Seleccionar</a></td>
      </tr>
    </tbody>
  </table>

@endsection