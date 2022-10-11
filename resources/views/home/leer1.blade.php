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
        <div class="dlab-bnr-inr" style="background-image:url({{asset('public/img/banner1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white" id="subtitulo">Lo que aprendimos con Cristina Cuellar  </h1>
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
						<h2 class=" m-b10" id="subtitulo" style="color: #000;">Lo que aprendimos con Cristina Cuellar </h2>
						<div class="dlab-separator-outer m-b0">
							{{-- <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div> --}}
						</div>
						<p>En la  Masterclass de  Crsitina Cuellar en Puebla   nos  enseño como maquillar a una novia con una técnica casual y conservadora <br> <br>
                        La técnica de Cristina cuellar cuenta con una técnica que fluye dentro de las novias que buscan un maquillaje  casual y elegante <br> <br>
                        No solo fue  aprender  cómo se maquilla una Novia sino que también nos dejó una lección de vida en  ya que nos comenzó a platicar   sus experiencia  desde como  inicio en el mundo del MakeUp y  hasta donde ha llegado en el dia a dia <br> <br>
                        Uno de los temas que nos compartió es como llegar a cobrar por lo que vale tu trabajo y no estar regalando tu Trabajo <br> <br>
                        No te quedes  fuera de nuestro siguiente Evento con Pepe Guitierrez 
                    </p>
                        <video width="500" height="auto" controls>
                            <source src="{{asset('public/video/video2.mp4')}}" type="video/mp4">
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