@extends('layout')
@section('title','Acerca de')
    
@section('contenido')

<section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
    <div class="container">
        <h2 class="text-center titles">Instalaciones de la institución</h2>
        <br><br>
        <!--======================================== Carrusel ========================================-->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-push-6">
                <h3 class="text-center titles">Acerca de</h3>
                <h2>INSTITUTO TÉCNICO ENSEC "FELIPE LEONOR RIBERA"</h2>
                <p class="lead">El Instituto Tecnico “ENSEC” “FELIPE LEONOR RIBERA” Está ubicado entre la calle La Paz Esq. Ñuflo de Chávez Nº159 del departamento Santa Cruz de la Sierra, fundada el 20 de mayo de 1920. Nuestra Prestigiosa Casa de Estudio es pionera en la educación Comercial de nuestro país, se mantiene a la vanguardia en la formación de profesionales en el área comercial. Desde la gestión 2018 todos nuestros profesionales reciben sus Títulos Profesionales en el acto de Colación.
                {{-- <a href="http://ins-sensunte.net/imagenes/espacio_ins/Flash01/index.html" class="open-link-newTab">Has click aqui para ver las fotos</a> --}}
                </p>
                {{-- <i class="fa fa-picture-o icon-index hidden-xs hidden-sm"></i> --}}
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                <div id="slider-ins" class="carousel slide" data-ride="carousel">
                  <!-- Indicadores -->
                  <ol class="carousel-indicators">
                    <li data-target="#slider-ins" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-ins" data-slide-to="1"></li>
                    <li data-target="#slider-ins" data-slide-to="2"></li>
                  </ol>

                  <!-- Imagenes -->
                  <div class="carousel-inner" role="listbox">
                    
                    <!-- Primera imagen -->
                    <div class="item active">
                      <img src="{{asset('/static/assets/gallery/AMBIENTES.png')}}" alt="Default">
                      <div class="carousel-caption">
                        Instalaciones E.N.S.E.C.
                      </div>
                    </div>
                    
                    <!-- Segunda imagen -->
                    <div class="item">
                      <img src="{{asset('/static/assets/gallery/feria.gif')}}" alt="Default">
                      <div class="carousel-caption">
                        Lorem ipsum dolor sit amet
                      </div>
                    </div>
                    
                    <!-- Tercera imagen -->
                    <div class="item">
                      <img src="{{asset('/static/assets/gallery/2.png')}}" alt="Default">
                      <div class="carousel-caption">
                        Lorem ipsum dolor sit amet
                      </div>
                    </div>
                    
                  </div>

                  <!-- Controles -->
                  <a class="left carousel-control" href="#slider-ins" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#slider-ins" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        <br>
        <div class="divider-general"></div>
        <br>
        <!--======================================== Video ========================================-->
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h3 class="text-center titles">Misión</h3>
                <p class="lead">Promover la Educación Superior Técnica integral y comunitaria, basada en principios y valores éticos, que responda a las demandas del mercado laboral proporcionando recursos humanos emprendedores, competentes, eficientes y comprometidos con el desarrollo de la sociedad y el Estado.</p>
                {{-- <i class="fa fa-film icon-index hidden-xs hidden-sm"></i> --}}
                
            </div>
            <div class="col-xs-12 col-sm-6">
                <h3 class="text-center titles">Visión</h3>
                <p class="lead">Ser la institución líder en la Educación Superior Técnica con prestigio académico, comprometidos con el desarrollo integral del país, que imparte educación para formar profesionales creativos y con profunda orientación de servicio, capaz de desenvolverse y desarrollarse en cualquier ámbito.</p>
                {{-- <i class="fa fa-film icon-index hidden-xs hidden-sm"></i>         --}}

                <video controls>
                    <source src="{{asset('/static/assets/video/InstitutoTecnicoENSEC.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>
<div class="divider-general"></div>

@endsection