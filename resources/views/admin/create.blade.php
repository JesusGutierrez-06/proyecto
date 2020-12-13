@extends('admin.layout')
@section('contenido')
    
   
<center> <h1>Registrar Usuario Estudiante</h1>
</center>
    <form action="{{route('admin.store')}}" method="post" >
        @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label>Email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" name="email" placeholder="example@example.com" aria-describedby="inputGroupPrepend" >
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label >Password</label>
        <input type="password" class="form-control" name="password"  placeholder="Contraseña" >
      </div>
          <div class="col-md-2 mb-3">
            <label >Tipo de Usuario</label>
            <select class="custom-select" id="tipo_usuario_id" name= "tipo_usuario_id" >
              <option value="">Seleccionar Tipo de usuario</option>
              @foreach ($tipo_usuario as $tipo_usuarios)
              <option value="{{ $tipo_usuarios->id}}">{{ $tipo_usuarios->nombre}}</option>
              @endforeach
            </select>
          </div>
    </div>
    <div class="form-row">
        <div class="col-md-5 mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
                <label class="form-check-label" >
                 Estoy de acuerdo con los terminos y condiciones
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
          </div>
          <div class="col-md-2 mb-3">
            <button class="btn btn-primary" type="submit">Siguiente --></button>
            
          </div>
          <div class="col-md-5 mb-3">
            
          </div>

    </div>
  </form>        
          

@endsection

