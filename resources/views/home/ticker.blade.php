@extends('layout.master') 
    @section('title')
    Nosotros
    @endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary" style="background-image:url({{asset('public/img/banner1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white" id="titulo">Ticker</h1>
					<!-- Breadcrumb row -->
					
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>

        			<!-- Our Professional Team -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-head text-black text-center">
						{{-- <h2 class="text-primary m-b10" id="titulo">Lo que aprendimos con Cristina Cuellar </h2> --}}
						<div class="dlab-separator-outer m-b0">
							{{-- <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div> --}}
						</div>
                        <div w-type="event-discovery" w-tmapikey="pLOeuGq2JL05uEGrZG7DuGWu6sh2OnMz" w-googleapikey="AIzaSyBQrJ5ECXDaXVlICIdUBOe8impKIGHDzdA" w-keyword="zz top" w-theme="newschool" w-colorscheme="light" w-width="300" w-height="600" w-size="25" w-border="2" w-borderradius="7" w-postalcode="" w-radius="" w-country="" w-period="year" w-layout="vertical" w-attractionid="" w-promoterid="" w-venueid="" w-affiliateid="" w-segmentid="" w-proportion="xxl"></div>
    <script src="https://ticketmaster-api-staging.github.io/products-and-docs/widgets/event-discovery/1.0.0/lib/main-widget.js?v=1"></script>

					</div>
				</div>
			</div>
	
		<!-- contact area END -->
    </div>
@endsection

@section('script')

@endsection