<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
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
        <h2>Lista de Usuarios Registrados</h2>
    </center>
    <table>
        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo Usuario</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <td >{{ $user->id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->tipo_usuario }}</td>
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