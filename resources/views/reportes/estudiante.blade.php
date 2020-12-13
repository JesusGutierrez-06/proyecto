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
    <img src="logo.png">
    <center>
        <h1>Lista de Estudiantes Registrados</h1>
    </center>
    <table style="text-align: center" class="table table-hover table-responsive-xl">
        <thead class="table-color">
            <tr>
                <th >#</th>
                <th >Nombre</th>
                <th >Matricula</th>
                <th >Celular / Telefono</th>
                <th >DNI</th>
                <th >Lugar Nac.</th>
                <th >Direccion</th>
                <th >Fecha de Nac.</th>
                <th >Estado</th>
                <th >Fecha de creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <td >{{ $user->id }}</td>
                    <td>{{ $user->nombre }} {{ $user->apellidop }} {{ $user->apellidom }}</td>
                    <td>{{ $user->matricula }}</td>
                    <td>{{ $user->celular }} / {{ $user->telefono }}</td>
                    <td>{{ $user->dni }}</td>
                    <td>{{ $user->departamento }} - {{ $user->provincia }}</td>
                    <td>{{ $user->direccion }}</td>
                    <td>{{ $user->fechanac }}</td>
                    <td>{{ $user->created_at }}</td>
                    <?php if ($user->estado == '1') {
                    echo '<td >Activo</td>';
                    } elseif ($user->estado == '0') {
                    echo '<td class="inactivo">Inactivo</td>';
                    } ?>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>