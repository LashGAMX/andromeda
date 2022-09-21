@extends('layout.master') 
    @section('title')
    Nosotros
    @endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr " style="background-image:url({{asset('public/img/banner1.jpg')}});">
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
						<h2 class=" m-b10" id="titulo" style="color: #000;">Servicios</h2>
						<div class="dlab-separator-outer m-b0">
							{{-- <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div> --}}
						</div>
						<p>Nosotros somos Andrómeda Producciones, nos dedicamos a la capacitación  y actualización para los  MakeUp Artist  de México. <br><br>
                        Nuestra asistencia se engloba dentro de los servicios siguientes: <br><br>
                        Para Make Up Artist no hay nada más importante que ofrecerte el mejor servicio, con la finalidad de que aprendas y apliques los conocimientos adquiridos de la mano de nosotros en cada una de las fases.
                    </p>
					</div>
					<div class="row">

						<div class="col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{asset('public/img/nosotros/evento.jpg')}}" alt=""/>
								</div>
								<div class="service-content">
									<h6 style="color: #000;" class="text-uppercase">Eventos </h6>
									<p class="m-b0" id="textop">Los Eventos de Makeup se desarrollan de acuerdo a la  demanda de los participantes  y de la zona del Pais.</p> 
								</div>
							</div>
						</div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center"> 
								<div class="service-images m-b15">
									<img src="{{asset('public/img/nosotros/masterclass.jpg')}}" alt=""/>
								</div>
								<div class="service-content">
									<h6 style="color: #000;" class="text-uppercase">Master Class </h6>
									<p class="m-b0" id="textop">Cada una de las masterclass se  diseña para los MakeUp Artistt de Mexico  actualmente  tenemos 
                                        Nuestro primer evento combinamos a dos grandes expertos en el Mundo del MakeUp 
                                        Cristina cuellar y César Mushi en la ciudad de Puebla  donde nos compartieron sus secretos en cuanto a técnicas de maquillaje y los productos que ellos usan .
                                        </p>
								</div>
							</div>
						</div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{asset('public/img/nosotros/taller.jpg')}}" alt=""/>
								</div>
								<div class="service-content">
									<h6 style="color: #000;" class="text-uppercase">Workshop  </h6>
									<p class="m-b0" id="textop">Los Workshop  que han impartido cada uno de nuestros experto se realiza de forma personalizada para un número  exclusivo de MakeUp Artist 
                                        No pierdas la oportunidad y compra tus acceso para  nuestro próximo evento .
                                        </p>
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
                                <p id="textop">Inauguración de Andrómeda Producciones, que tuvieron como padrinos a CESAR MUSHI Y CRISTINA CUELLAR. </p>
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