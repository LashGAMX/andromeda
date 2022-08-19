<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="BeautyZone : Beauty Spa Salon HTML Template" />
	<meta property="og:title" content="BeautyZone : Beauty Spa Salon HTML Template" />
	<meta property="og:description" content="BeautyZone : Beauty Spa Salon HTML Template" />
	<meta property="og:image" content="https://beautyzone.dexignzone.com/xhtml/social-image.png"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Andromeda</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('andromeda/css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('andromeda/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('andromeda/css/templete.min.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('andromeda/css/skin/skin-2.css')}}">
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header header center mo-left">
		<div class="top-bar bg-primary text-white">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dlab-topbar-left">
						<ul>
							<li><i class="fa fa-phone m-r5"></i> Lorem, ipsum dolor.</li>
							<li><i class="fa fa-map-marker m-r5"></i> Lorem ipsum dolor sit amet.</li>
						</ul>
					</div>
					<div class="dlab-topbar-right topbar-social">
						<ul>
							<li><a target="_blank" href="https://www.facebook.com/" class="site-button-link facebook  hover"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.html" class="dez-page"><img src="images/logo-black.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
						<ul class="nav navbar-nav">
							<li><a href="javascript:void(0);">Inicio</a></li>
							<li><a href="javascript:void(0);">Nosotros</a></li>
							<li><a href="javascript:void(0);">Tienda</a></li>
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{asset('andromeda/images/banner/bnr2.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Register</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Register</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Registrarse</h3>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12 m-b30">
						<div class="p-a30 border-1  max-w500 m-auto">
							<div class="tab-content">
								<form id="login" class="tab-pane active">
									<h4 class="font-weight-700">INFORMACIÓN PERSONAL</h4>
									<div class="form-group">
										<label class="font-weight-700">Nombre *</label>
										<input name="dzName" required="" class="form-control" placeholder="First Name" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">Apellidos *</label>
										<input name="dzName" required="" class="form-control" placeholder="Last Name" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input name="dzName" required="" class="form-control" placeholder="Your Email Id" type="email">
									</div>
									<div class="form-group">
										<label class="font-weight-700">CONTRASEÑA *</label>
										<input name="dzName" required="" class="form-control " placeholder="Type Password" type="password">
									</div>
									<div class="text-left">
										<button class="site-button button-lg radius-no outline outline-2">REGISTRAR</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
        <!-- contact area  END -->
    </div>
    
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('andromeda/js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('andromeda/plugins/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{asset('andromeda/plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('andromeda/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('andromeda/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('andromeda/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('andromeda/plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('andromeda/plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('andromeda/plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('andromeda/plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('andromeda/plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{asset('andromeda/plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{asset('andromeda/plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('andromeda/plugins/rangeslider/rangeslider.js')}}" ></script><!-- Rangeslider -->
<script src="{{asset('andromeda/js/custom.min.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('andromeda/js/dz.carousel.min.js')}}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{asset('andromeda/js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
</body>
</html>
