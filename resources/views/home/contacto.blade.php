@extends('layout.master') 
    @section('title')
    Contacto
    @endsection
@section('content')
<div class="page-content bg-white">
    		<!-- inner page banner -->
            <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{asset('public/img/banner2.jpg')}});">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white" id="titulo">Contactanos</h1>
                        <!-- Breadcrumb row -->

                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            		<!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
					<!-- right part start -->
					<div class="col-lg-4 col-md-6 d-flex">
                        <div class="p-a30 border m-b30 contact-area border-1 align-self-stretch ">
							<h4 class="m-b10" id="titulo">Contacto</h4>
							<p id="textop">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa?</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i class="ti-location-pin"></i></span> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte" id="subtitulo">Dirección:</h6>
                                        <p id="textop">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, placeat.</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i class="ti-email"></i></span> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte" id="subtitulo">Correo:</h6>
                                        <p id="textop">info@example.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i class="ti-mobile"></i></span> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte" id="subtitulo">Telefono</h6>
                                        <p id="textop">+25 222 222 2222</p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="dlab-social-icon dlab-social-icon-lg">
									<li><a target="_blank" href="https://www.facebook.com/andromedainstituto/" class="fa fa-facebook bg-primary"></a></li>
									{{-- <li><a target="_blank" href="https://twitter.com/" class="fa fa-twitter bg-primary"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fa fa-linkedin bg-primary"></a></li> --}}
									<li><a target="_blank" href="https://www.instagram.com/andromeda_institute/" class="fa fa-instagram bg-primary"></a></li>
									{{-- <li><a target="_blank" href="https://www.google.com/" class="fa fa-google-plus bg-primary"></a></li> --}}
								</ul>
							</div>
                        </div>
                    </div>
                    <!-- right part END -->
                    <!-- Left part start -->
					<div class="col-lg-4 col-md-6 m-b30">
                        <div class="p-a30 bg-gray clearfix">
							<h4 id="titulo">Envianos mensaje</h4>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="script/contact.php">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required class="form-control" placeholder="Escribe tu nombre">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Correo electrónico" >
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Escribe tu mensaje"></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="<!-- Put Your reCaptcha Secret Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span id="textop">Enviar</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
					<div class="col-lg-4 col-md-12 d-flex m-b30">
						{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch " style="border:0; width:100%; height:100%;" allowfullscreen></iframe> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120689.12363178469!2d-98.26300585597724!3d19.040196274484934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0bd5ebc7a3b%3A0x48a6461de494ad95!2sPuebla%2C%20Pue.!5e0!3m2!1ses-419!2smx!4v1662068969715!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
                </div>
            </div>
        </div>
        <!-- contact area  END -->
</div>
@endsection

@section('script')

@endsection