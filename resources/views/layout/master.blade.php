<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{asset('public/img/logo.ico')}}" style="width:500%;height:auto;">
	
	<!-- PAGE TITLE HERE -->
	<title>Andromeda | @yield('title')</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="keywords" content="Master class puebla, workshop. Maquillaje, maquilladora, maquillista, makeup artista, MAC COSMETICS, dior, chanel, capacitación de maquillaje, lancome, air brush makeup, yves saint Laurent, master en maquillaje, actualizaciones, técnicas de maquillaje ,Cursos de maquillaje en puebla." />
	
	{{-- fonts --}}
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/css/master.css')}}">
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/andromeda/css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/andromeda/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/andromeda/css/templete.min.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('public/andromeda/css/skin/skin-2.css')}}">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/andromeda/plugins/revolution/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/andromeda/plugins/revolution/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/andromeda/plugins/revolution/revolution/css/navigation.css')}}">


	
	<!-- Revolution Navigation Style -->
	<style>
		#body{
			font-family: 'Poppins', sans-serif;
		}
		#titulo{
			font: normal bold 60px Poppins, sans-serif;
		}
		#titulo-g{
			font: normal bold 60px Poppins, sans-serif;
		}
		#titulo-ch{
			font: normal bold 15px Poppins, sans-serif;
		}
		#subtitulo{
			font: normal 30px Poppins, sans-serif;
			font-weight: 500;
		}
		#sectionMenuSub{
			font: normal bold 30px Poppins, sans-serif;
		}
		#sectionSub{
			font: normal  20px Poppins, sans-serif;
		}
		#textop{
			font: normal  15px Poppins, sans-serif;
			font-style: normal
		}
	
	</style>
    @yield('head')
</head>
<body id="bg">
<div class="page-wraper">
    <header class="site-header header header-transparent mo-left header-salon tb">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.html" class="dez-page"><img src="{{asset('public/img/logo.png')}}" alt="" style="width: 40%"></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">	
							<li id="titulop" class="active" class="colorp"><a href="{{url('inicio')}}" style="text-transform: capitalize; color: #000">Home </a></li>
							<li id="titulop" ><a href="{{url('nosotros')}}" style="text-transform: capitalize;color: #000">Nosotros </a></li>
							{{-- <li><a href="javascript:void(0);">Blog </a></li> --}}
							<li id="titulop" class="colorp"><a href="{{url('contacto')}}" style="text-transform: capitalize;color: #000">Contacto </a></li>
						</ul>
                    </div>
                </div>
            </div> 
        </div>
        <!-- main header END -->
    </header>
    @yield('content')

    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('public/andromeda/js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('public/andromeda/plugins/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{asset('public/andromeda/plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('public/andromeda/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('public/andromeda/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('public/andromeda/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('public/andromeda/plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('public/andromeda/plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('public/andromeda/plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('public/andromeda/plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('public/andromeda/plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{asset('public/andromeda/plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{asset('public/andromeda/plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('public/andromeda/plugins/rangeslider/rangeslider.js')}}" ></script><!-- Rangeslider -->
<script src="{{asset('public/andromeda/js/custom.min.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('public/andromeda/js/dz.carousel.min.js')}}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{asset('public/andromeda/js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->


@yield('script')

</body>
</html>
