<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset ('/static/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset ('/static/css/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset ('/static/css/bootstrap.min.css')}}">
    <link href="{{asset('http://fonts.googleapis.com/css?family=PT+Sans+Narrow')}}" rel='stylesheet' type='text/css'>
	<link href="{{asset('http://fonts.googleapis.com/css?family=Fjalla+One')}}" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('/static/css/style.css')}}">
	<script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}"></script>
	<script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.11.2.min.js')}}"><\/script>')</script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css')}}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="{{asset('/static/js/modernizr.js')}}"></script>
	<script src="{{asset('/static/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/static/js/main.js')}}"></script>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="{{asset ('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{asset ('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">		
		<span class="hidden-lg hidden-md">Instituto_E.N.S.E.C.<img src="{{asset('/static/assets/img/logos.png')}}" width="40px"></span>
		<span class="hidden-xs hidden-sm"><img src="{{asset('/static/assets/img/logos.png')}}" width="40px"> Instituto E.N.S.E.C.</span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="/">Inicio</a></li>
				<li><a href="/about">Institución</a></li>
				<li><a href="/admision">Admisión</a></li>
				<li><a href="#" class="btm-mega-menu">Más &nbsp;<i class="fa fa-caret-down"></i></a></li>
			</ul>
		</nav>
		
		<!--======================================== Mega menu ========================================-->
		<div class="full-reset mega-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<span class="full-reset titles">Recursos educativos</span>
						<ul class="list-unstyled full-reset">
							<li><a href="https://www.google.com/" class="open-link-newTab"><i class="fa fa-search"></i>&nbsp; Buscar en GOOGLE</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-graduation-cap"></i>&nbsp; Plataforma (VIRTUAL)</a></li>
							<li><a href="/estudiante_buscar_oferta" ><i class="fa fa-search"></i>&nbsp; Buscar Ofertas Laborales</a></li>
							<li><a href="/estudiante_mis_oferta"> <i class="fa fa-folder"></i>&nbsp; Mis Ofertas Postuladas</a></li>
						</ul>
					</div>
					
					<div class="col-xs-12 col-sm-4">
						<span class="full-reset titles">Enlacesa importantes</span>
						<ul class="list-unstyled full-reset">
							<li><a href="/estudiante_dato_general"><i class="fa fa-folder-open"></i>&nbsp; Datos Generales</a></li>
							<li><a href="/estudiante_dato"><i class="fa fa-list-alt"></i>&nbsp; Datos Personales</a></li>
							<li><a href="/estudiante_estudio"><i class="fa fa-newspaper-o"></i>&nbsp; Estudios </a></li>
							<li><a href="/estudiante_explaboral"><i class="fa fa-file"></i>&nbsp; Experiencia laboral</a></li>
							<li><a href="/estudiante_idioma"><i class="fa fa-language"></i>&nbsp; Idiomas</a></li>
                            {{-- class="open-link-newTab" --}}
                        </ul>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="full-reset titles">Sesión</span>
						<ul class="list-unstyled full-reset">
							<li><a href="/estudiante_login"><i class="fa fa-file"></i>&nbsp; Datos de Usuario</a></li>
							<li><a href="/estudiante_usuario"><i class="fa fa-edit"></i>&nbsp;Modificar datos de Usuario</a></li>
							<li><a href="/estudiante_destroy"><i class="fa fa-user-times"></i>&nbsp; Dar de baja mi cuenta</a></li>
						</ul>
					</div>
						</div>
	</div>
	<i class="fa fa-times-circle btm-mega-menu close-mega-menu fa-2x"></i>
	</div>
		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>
	<!--======================================== Logo & Lema ========================================-->
	<div class="container">
	@yield('contenido')
	</div>
		<!--======================================== Enlaces importantes ========================================-->
	<section class="text-center important-links-index">
		<h2 class="titles">Sitios y enlaces importantes</h2>

		<a href="#!" class="open-link-newTab">
			<i class="fa fa-graduation-cap"></i>
			<p>Clases Online</p>
		</a>

		<a href="#!" class="open-link-newTab">
			<i class="fa fa-book"></i>
			<p>Libreria</p>
		</a>

		{{-- <a href="#!" class="open-link-newTab">
			<i class="fa fa-globe"></i>
			<p>JOVENES A.T.T</p>
		</a> --}}

		<a href="#!" class="open-link-newTab">
			<i class="fa fa-star-o"></i>
			<p>Promo. INS</p>
		</a>

		<a href="#!" class="open-link-newTab">
			<i class="fa fa-file-text-o"></i>
			<p>Cons.conducta</p>
		</a>

		<a href="#!" class="open-link-newTab">
			<i class="fa fa-download"></i>
			<p>Descargas</p>
		</a>
	</section>
	<!--======================================== Pie de pagina ========================================-->
	<footer class="full-reset footer">
		<div class="full-reset" style="padding: 15px 0;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Visitenos en</h4>
						<p class="text-center">Z/ Central, Calle La Paz 158 esq. Nuflo de Chavez.</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Contactenos</h4>
						<p class="text-center">Tel: 3332859<br>Correo Electrónico: ensec@ensec.edu.bo</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles subtitles-footer">Siguenos en</h4>
						<ul class="list-unstyled links-footer">
							<li><a href="https://www.facebook.com/ensec.edu/" class="open-link-newTab"><i class="fa fa-facebook"></i> &nbsp; Facebook</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-twitter"></i> &nbsp; Twitter</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-google-plus"></i> &nbsp; Google+</a></li>
						</ul>
					</div>
					<div class="col-xs-12">
						<div class="full-reset footer-copyright"><i class="fa fa-copyright"></i> 2020 Jesus Gutierrez</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>