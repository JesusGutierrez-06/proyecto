@extends('admin.layout')
@section('title', 'Registro Candidato')

@section('contenido')


<center><h3>Listado de postulante a la ofertal laboral <strong>{{$data[0]->titulo}}</strong> </h3></center>

<table style="text-align: center" class="table table-hover table-responsive-xl">
    <thead class="table-success">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Telefono</th>
        <th scope="col">Celular</th>
        <th scope="col">Fecha de postulación</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->nombre }}</td>
            <td>{{ $user->apellidop }}</td>
            <td>{{ $user->apellidom }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->celular }}</td>
            <td>{{ $user->created_at }}</td>
            <form action="{{route('postular.update',$user->id)}}" method="post">
                @csrf @method('PUT')

            <input type="hidden" name="oferta_laboral_id" value="{{$user->oferta_laboral_id}}">
                <?php if ($user->estado_preseleccion == '0') {
                    echo '<input type="hidden" name="preseleccion" value="1">';
                echo '<td><button class="btn btn-sm btn-danger"style="background-color: #00796b; color:white;">Seleccionar</button></td>';
                } elseif ($user->estado_preseleccion == '1') {
                    echo '<input type="hidden" name="preseleccion" value="0">';
                echo '<td> <button class="btn btn-sm btn-danger">Deseleccionar</button></td>';
                } ?>
                    </form>                    
             </tr>
    @endforeach
</tbody>
  </table>

@endsection
