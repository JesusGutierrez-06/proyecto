@extends('admin.layout')
@section('title', 'Home')
@section('contenido')
    <center>
        <h2>Lista de Estudiantes</h2>
    </center>
<a class="btn btn-sm btn-danger" href="{{route('reportes.estudiante')}}">PDF</a>
    <ul class="navbar-nav ml-auto float-right">
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="{{ route('admin.create') }}" role="button">
                <i class="fas fa-user-plus">Nuevo Usuario</i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm ">
                        <input name="buscar" class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search" value="{{ $buscar }}">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
    <table style="text-align: center" class="table table-hover table-responsive-xl">
        <thead class="table-color">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Celular / Telefono</th>
                <th scope="col">DNI</th>
                <th scope="col">Lugar Nac.</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col">Hoja de vida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->nombre }} {{ $user->apellidop }} {{ $user->apellidom }}</td>
                    <td>{{ $user->celular }} / {{ $user->telefono }}</td>
                    <td>{{ $user->dni }}</td>
                    <td>{{ $user->departamento }} - {{ $user->provincia }}</td>
                    <?php if ($user->estado == '1') {
                    echo '<td class="badge" style="background-color: #00796b; color:white;">Activo</td>';
                    } elseif ($user->estado == '0') {
                    echo '<td class="badge badge-danger">Inacctivo</td>';
                    } ?>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="{{route('estudiante.show',$user->id)}}" class="btn btn-sm btn-default">Información</a>
                        <br>     <a href="{{route('estudiante.edit',$user->id)}}"class="btn btn-sm btn-default" >Editar</a>
                    <br><form action="{{route('estudiante.destroy',$user->id)}}" method="post">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example "class="float-right">
        <ul class="pagination">
            <li class=" {{ $data->currentPage() == 1 ? ' disabled' : '' }} page-item"><a class="page-link"
                    href="{{ $data->url(1) }}">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            @for ($i = 1; $i <= $data->lastPage(); $i++)
                <li class="{{ $data->currentPage() == $i ? ' seleccionar ' : '' }} page-item">
                    <a class=" page-link " href="{{ $data->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="{{ $data->currentPage() == $data->lastPage() ? ' disabled' : '' }} page-item">
                <a href="{{ $data->url($data->currentPage() + 1) }}" class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
