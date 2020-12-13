@extends('admin.layout')
@section('title', 'Datos Empresa')

@section('contenido')

    <center>
        <h1>Datos General de la empresa</h1>
    </center>
    <div class="form-row">
        <div class="col-md-6 mb-1">

            <table style="text-align: center" class="table table-hover table-responsive-xl">
                <tbody>
                    <tr>
                        <th class="table-color" scope="col">Nombre :</th>
                        <td scope="col">{{ $data['empresa']->nombre }} 
                        </td>
                    </tr>
                    <tr>    
                        <th class="table-color" scope="col">Ubicación :</th>
                        <td scope="col">{{ $data['empresa']->direccion }} 
                        </td>
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Página Url:</th>
                        <td scope="col">{{ $data['empresa']->url_pagina }} 
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: center;" colspan="2" class="table-color" scope="col">A que se dedica el rubro :</th>
                    </tr>
                    <tr>
                        <td colspan="2"  scope="col">{{ $data['empresa']->descripcion }} </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 mb-1">

            <table style="text-align: center" class="table table-hover table-responsive-xl">
                <tbody>
                    <tr>
                        <th class="table-color" scope="col">NIT :</th>
                        <th scope="col">{{ $data['empresa']->nit }} </th>
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Celular :</th>
                        <th scope="col">{{ $data['empresa']->celular }} </th>
                    </tr>
                    <tr>
                        <th class="table-color" scope="col">Telefono :</th>
                        <th scope="col">{{ $data['empresa']->telefono }} </th>
                    </tr>                    
                </tbody>
            </table>
            <img src="{{asset('static/assets/img/aprobado.png')}}" width="200px">
        </div>
    </div><br>

    <table style="text-align: center" class="table table-hover table-responsive-xl">
        <thead class="table-color">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">celular</th>
                <th scope="col">telefono</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['contacto'] as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->celular }}</td>
                    <td>{{ $user->telefono }}</td>
                    <?php if ($user->estado == '1') {
                    echo '<td class="badge" style="background-color: #00796b; color:white;">Activo</td>';
                    } elseif ($user->estado == '0') {
                    echo '<td class="badge badge-danger">Inactivo</td>';
                    } ?>
                    <td>
                        <a href="#" class="fa fa-poll-h fa-2x" title="Editar"></a>
                        <a href="#" class="fa fa-file-excel fa-2x" title="Eliminar"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
