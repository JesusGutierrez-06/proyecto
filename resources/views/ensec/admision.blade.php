@extends('layout')
@section('title','Acerca de')
    
@section('contenido')

<section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
    <div class="container">
        <!--======================================== Video ========================================-->
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2 class="text-center titles"><strong>Requisitos</strong></h2>
                <h3>Admisión</h3>
                <ul>
                    <li>- 1 Fotocopia simple de Diploma de Bachiller (Titulo de Bachiller)</li>
                    <li>- 1 Fotocopia de la Cédula de Identidad vigente.</li>
                    <li>- 1 Fotocopia Certificado de Nacimiento.</li>
                    <li>- 1 Fotografía 4x4 fondo rojo.</li>
                </ul>
                <i class="fa fa-film icon-index hidden-xs hidden-sm"></i>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2 class="text-center titles"><strong>Beneficios</strong></h2>
                <h3>Turnos</h3>
                <ul>
                    <li>- Turno mañana:</li>
                    <li> Lunes a viernes 07:45 - 12:30</li>
                    <li>- Turno Noche:</li>
                    <li> Lunes a Sábado: 18:45 - 22:00</li>
                </ul>
                <i class="fa fa-film icon-index hidden-xs hidden-sm"></i>
            </div>
        </div>
    </div>
</section>
<div class="divider-general"></div>
<!--======================================== Acontecer institucional ========================================-->
<section class="events-ins">
    <div class="container-fluid">
        <h2 class="text-center titles">ACONTECER INSTITUCIONAL</h2>
        <br><br>
        <div class="row">
            <!--======================================== Articulo 1 ========================================-->
            <article class="col-xs-12 col-sm-6 col-md-6">
                <div class="thumbnail">
                  <img src="{{asset('/static/assets/gallery/acercade.jpeg')}}" alt="IMG" class="img-responsive img-rounded">
                  <div class="caption">
                    <h3 class="text-center">Contáctenos</h3>
                    <p class="text-justify">Responderemos lo más pronto posible.</p>
                    {{-- <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver imágenes</a></p> --}}
                  </div>
                </div>
            </article>
            <!--======================================== Articulo 2 ========================================-->
            <article class="col-xs-12 col-sm-6 col-md-6">
                <div class="thumbnail">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15196.530700532127!2d-63.18792253732679!3d-17.785460631872528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf5ee7174158265d!2sE.N.S.E.C.!5e0!3m2!1ses!2sbo!4v1606701895166!5m2!1ses!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </article>
            <!--======================================== Articulo 3 ========================================-->
        </div>
    </div>
</section>
<div class="divider-general"></div>


@endsection