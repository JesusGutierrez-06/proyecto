@extends('empresa.layout')
@section('title','Registro Empresa')
    
@section('contenido')
    
<center><h1>Mis Ofertas laborales Registradas</h1></center>

<table style="text-align: center" class="table table-hover table-responsive-xl">
  <thead class="table-success">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Fecha Publicada</th>
        <th scope="col">Descripción de Actividad</th>
        <th scope="col">Vacantes</th>
        <th scope="col">Salario</th>
        <th scope="col">Carrera</th>
        <th scope="col">Candidatos</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($ofertas as $oferta)
      <tr>
        <td>{{$oferta->id}}</td>
        <td>{{$oferta->titulo}}</td>
        <td>{{$oferta->fechainicio}}</td>
        <td>{{$oferta->fechafin}}</td>
        <td>{{$oferta->actividades}}</td>
        <td>{{$oferta->vacantes}}</td>
        <td>{{$oferta->carreraid}}</td>
        
            
        {{-- <th scope="row">1</th>
        <td>Desarrollador Junior</td>
        <td>2020-10-23</td>
        <td>Desarrollo en javaScript</td>
        <td>3</td>
        <td>2.500 Bs</td>
        <td>Ing. Sistema</td>
        <td style="color: red"> <center><img src="{{asset('/static/assets/img/Candidatos.png')}}"><br><a href="/empresa_lista_postulante"> (3)</a> </center></td> --}}
        <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
      </tr>
      @endforeach
      
      <tr>
        <th scope="row">2</th>
        <td>Secretaria</td>
        <td>2020-10-23</td>
        <td>Call Center</td>
        <td>3</td>
        <td>2.500 Bs</td>
        <td>Secretaria</td>
        <td style="color: red"> <center><img src="{{asset('/static/assets/img/Candidatos.png')}}"><br><a href="/empresa_lista_postulante"> (3)</a> </center></td>
        <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Secretaria</td>
        <td>2020-10-23</td>
        <td>Call Center</td>
        <td>3</td>
        <td>2.500 Bs</td>
        <td>Secretaria</td>
        <td style="color: red"> <center><img src="{{asset('/static/assets/img/Candidatos.png')}}"><br><a href="/empresa_lista_postulante"> (3)</a> </center></td>
        <td><center><img src="{{asset('/static/assets/img/detalles.png')}}"></center></td>
      </tr>
    </tbody>
  </table>

@endsection