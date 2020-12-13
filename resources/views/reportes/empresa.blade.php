<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            font-size: 9px;
        }
        table{
            border-collapse: separate;
            border-spacing: 0px;
        }
        table td{
            border:1px solid #221F1F;
            padding: 4px;
            text-align: center;
        }
        table th{
            background-color: #221F1F;
            color: #E8DEDE;
        }
        .inactivo{
            background-color:#B2AAA9;
            color: #E8DEDE;
        }
    </style>
</head>
<body>
        <img src="{{ public_path('static/assets/img/logos.png')}}" alt="BTS"> 
    {{-- <img src="logos.png"  style="width: 150px; height: 150px;"> --}}
    {{-- <img src="{{ asset('logos.png')}}" alt="BTS">  --}}
    <center>
        <h1>Lista de Empresas Registradas</h1>
    </center>
<table>
    <thead>
        <tr>
            <th >#</th>
            <th >Nombre</th>
            <th >Nit</th>
            <th >Dirección</th>
            <th >Pagina Web</th>
            <th >Descripción</th>
            <th >Celular / Telefono</th>
            <th >Departamento</th>
            <th >Fecha de Creación</th>
            <th >Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
            <tr>
                <th >{{ $user->id }}</th>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->nit }}</td>
                <td>{{ $user->direccion }}</td>
                <td>{{ $user->url_pagina }}</td>
                <td>{{ $user->descripcion }}</td>
                <td>{{ $user->celular }} / {{ $user->telefono }}</td>
                <td>{{ $user->departamento }}</td>
                <td>{{ $user->created_at }}</td>
                <?php if ($user->estado == '1') {
                echo '<td>Activo</td>';
                } elseif ($user->estado == '0') {
                echo '<td class="inactivo">Inactivo</td>';
                } ?>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>