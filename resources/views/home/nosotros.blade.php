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
                    <h1 class="text-white" id="titulo">¿Quiénes somos? </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li id="titulo-ch">Somos una empresa comprometida con la excelencia educativa, tomando como base la importancia humana desde el amor, la pasión y el compromiso, asimismo que ésto lleve a nuestros alumnos a tener una actitud de emprendimiento y de máxima calidad.</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>

        			<!-- Our Professional Team -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10" id="titulo">Servicios</h2>
						<div class="dlab-separator-outer m-b0">
							{{-- <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div> --}}
						</div>
						{{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p> --}}
					</div>
					<div class="row">

						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{asset('public/andromeda/images/our-team/pic3.jpg')}}" alt=""/>
								</div>
								<div class="service-content">
									{{-- <h6 class="text-uppercase text-primary">Jennifer</h6> --}}
									<p class="m-b0" id="textop">Capacitación  y actualización para maquilladores profesionales.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- Our Professional Team -->

        <div class="section-full content-inner bg-blue-light" style="background-image:url({{asset('public/img/footer.jpg')}}); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="text-primary m-b10" id="titulo">Eventos anteriores</h2>
                    <div class="dlab-separator-outer m-b0">
                        {{-- <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div> --}}
                    </div>
                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p> --}}
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="price-tbl d-flex">
                            <div class="flex-grow-1">
                                {{-- <h4 class="text-primary">Deep Tissue Massage</h4> --}}
                                <p id="textop">Inauguración de Andrómeda producciones, que tuvieron como padrinos a CESAR MUSHI Y CRISTINA CUELLAR. </p>
                            </div>
                            <div class="price-val align-self-center">
                                {{-- <h3 class="text-secondry">$40.00</h3> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">

                    </div>
                </div>
            </div>
        </div>
		<!-- contact area END -->
    </div>
@endsection

@section('script')

@endsection