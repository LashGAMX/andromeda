@extends('layout.master') 
    @section('title')
    Nosotros
    @endsection
    @section('head')
        <script src="//widget.manychat.com/111985620932162.js" defer="defer"></script>
        <script src="https://mccdn.me/assets/js/widget.js" defer="defer"></script>
    @endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr " style="background-image:url({{asset('public/img/banner1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white" id="subtitulo">Lo que aprendimos en con César Mushi  </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li id="titulo-ch">El primer evento de Andrómeda Producciones.</li>
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
						<h2 class="text-primary m-b10" id="subtitulo">Lo que aprendimos en con César Mushi  </h2>
						<div class="dlab-separator-outer m-b0">
							{{-- <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div> --}}
						</div>
						<p>
                            La Masterclass de César Mushi en Puebla  comenzó a enseñarnos cómo maquillar a una novia con un maquillaje de piedras  ya que es un técnica que no muchas novias llegan a ocupar <br><br>
                            La Técnica de César Mushi es revolucionaria ya que  una novia con un maquillaje con piedra  <br><br>
                            Esta es una de las técnicas que es revolucionaria en el mundo del Makeup   pero de igual forma <br><br>
                            Cesar Mushi nos enseñó cómo debe ser el trato con la cliente ya que a cada una  de ellas les debemos dar la debida atención y dejarlas lucir  con lo buscas únicas  y hermosas <br><br>
                            Cada una de nuestras Masterclass  se vuelva única ya que  no solo nos comparten  sus técnicas de maquillaje sino que también sus experiencias en el mundo del Makeup <br><br>
                            NO te pierdas la oportunidad de acudir a nuestras Masterclass y Workshop con Peps Guitierrez y conoce sus secretos profesionales y experiencias en el mundo del workshop <br><br><br>
                            andrómeda producciones  


                        </p>
                        <video width="500" height="auto" controls>
                            <source src="{{asset('public/video/video1.mp4')}}" type="video/mp4">
                          Tu navegador no soporta la versión.
                          </video>
					</div>
                    
				</div>
			</div>
	
		<!-- contact area END -->
    </div>
@endsection

@section('script')

@endsection