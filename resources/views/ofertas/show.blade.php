@extends('admin.layout')
@section('title', 'Ofertas')

@section('contenido')

    <br>
    <div class="form-row">
        <div class="card col-md-4 mb-2">
            <div class="col-md-12 mb-2">
                        <h3>Información de:<br>
                        {{$data['empresa']->nombre}}
                        </h3>
                        
                        <div class="card">
                          <center>  <img class="card-img-top" style="width: 8rem;"
                            src="{{ asset('static/assets/img/download.png') }}" alt="Card image cap">
                          </center>
                        </div>
                        {{$data['departamento']->nombre}} - Bolivia.<br>
                        <strong>Telefono/Celular:</strong> {{$data['oferta_laboral']->telefono}} 
                        @isset($data['oferta_laboral']->celular)
                        - {{$data['oferta_laboral']->celular}}    
                        @endisset
                        <br>
                        <strong>Pagina Web:</strong>
                        @isset($data['oferta_laboral']->url_pagina)
                        - {{$data['oferta_laboral']->url_pagina}}    
                        @endisset
                        
            </div>
        </div>
        <div class="card col-md-8 mb-2">
            <div class="card-header">
                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <strong> {{ $data['oferta_laboral']->titulo }}</strong>
                        <br><br>
                        <strong>ID Empleo:</strong> {{ $data['oferta_laboral']->id }}
                        <br>
                        <strong>ID Carrera:</strong> {{ $data['carrera']->id }}
                        <br>
                        <strong>Sueldo:</strong> {{ $data['salario']->nombre }}
                        <br>
                        <strong>Publicado:</strong> {{ $data['oferta_laboral']->publicado }}
                    </div>
                    <div class="col-md-6 mb-2">
                        <form action="{{route('postular.store')}}" method="post">
                            @csrf 
                            <input type="hidden" value="{{$data['oferta_laboral']->id}}" name="oferta_laboral_id">
                            <input type="hidden" value="{{$data['estudiante']->id }}" name="estudiante_id">
                            <button type="submit" class="btn btn-sm btn-danger">Postular Oferta</button>
                        </form>
                    <a href="{{route('postular.show', $data['oferta_laboral']->id)}}" class="btn btn-sm btn-default" >Ver Lista de Postulantes</a>
                        <br>
                        <strong> Ubicación:</strong> {{ $data['departamento']->nombre }}
                        <br>
                        <strong> Carrera:</strong> {{ $data['carrera']->nombre }}
                        <br>
                        <strong> Contrato:</strong> {{ $data['contrato']->nombre }}
                        <br>
                        <strong> Vencimiento:</strong> {{ $data['oferta_laboral']->vencimiento }}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Detalle del empleo</h4>
                <h5 class="card-text" style="text-align: center"><strong> {{ $data['oferta_laboral']->titulo }}</strong>
                </h5>
                <br>
                <strong>Objetivo del Cargo:</strong><br>
                <p><?php echo $requisitos = nl2br($data['oferta_laboral']->descripcion); ?>
                </p>
                <br>
                <strong>Requisitos:</strong><br>
                <p><?php echo $requisitos = nl2br($data['oferta_laboral']->requisito); ?>
                </p>
            </div>
        </div>
    </div>

@endsection
