<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('´public/img/logo.ico')}}" style="width:500%;height:auto;">
    <title>Andromeda | registro</title>
 
    <!-- Favicons-->
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('public/registro/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('public/registro/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('publicregistro/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('publicregistro/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS --> 
    <link href="{{asset('public/registro/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/registro/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('public/registro/css/style.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('public/registro/css/custom.css')}}" rel="stylesheet">
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-lg-5 background-image p-0" data-background="url({{asset('public/registro/img/main_bg_4.jpg')}})">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	                <a href="#0" id="logo"><img src="{{asset('public/img/logo.png')}}" alt="" width="46" height="40"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="https://www.facebook.com/andromedainstituto/"><i class="social_facebook"></i></a></li>
	                        <li><a href="https://www.instagram.com/andromeda_institute/""><i class="social_instagram"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <a data-toggle="modal" data-target="#modalVideo"><img src="{{asset('public/img/btnPlay.png')}}" style="width: 50%;height: auto;" class="img img-fluid" alt=""></a>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-7 d-flex flex-column content-right">
	            <div class="container my-auto py-10">
	                <div class="row">
	                    <div class="col-lg-12 col-xl-10 mx-auto">
	                        <h4 class="mb-3">Inicio de sesión</h4>
	                        <form class="input_style_1" method="post" action="#">
								<div class="form-group">
	                                <label for="correo">Correo electrónico</label>
	                                <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electrónico">
	                            </div>
	                        	<div class="form-group">
	                                <label for="pass">Contraseña</label>
	                                <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña">
	                            </div>
								<div class="clearfix mb-10">
	                                <div class="float-start">
	                                    <label class="container_check">Recordarme
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                                <div class="float-end">
	                                    <a id="forgot" href="javascript:void(0);">¿Has olvidado tu contraseña?</a>
	                                </div>
	                            </div>
								<br><br>
								<p class="text-center mt-3 mb-0">¿Aún no tienes una cuenta? <a href="{{url('/create')}}">Registrate</a></p>
	                            <button type="submit" class="btn_1 full-width" style="background: #000">Iniciar sesión</button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->

<!-- Modal -->
<div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<video controls autoplay="true" style="width:100%;height:auto;">
			<source src="{{asset('public/video/fondo.mp4')}}" type="video/mp4">
		  Tu navegador no es compatible
		  </video>
	  </div>
	</div>
  </div>
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('public/registro/js/common_scripts.js')}}"></script>
	<script src="{{asset('public/registro/js/common_func.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>