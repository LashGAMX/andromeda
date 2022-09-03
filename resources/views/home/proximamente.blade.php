<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Próximamente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('public/css/mantenimiento.css')}}">
    <link rel="icon" href="{{asset('public/img/logo.ico')}}" style="width:500%;height:auto;">
    
  </head>
  <body onload="autoMusic()">
    <div id="panel">
      <canvas id="magic-dust"></canvas>
    </div>
    <div class="container" id="content"> 
        <div class="row">
            <div class="col-12">
              <center><img id="imgMakeUp" src="{{asset('public/img/makeup.png')}}" class="img-fluid"></center>
          </div>
            <div class="col-12">
                <center><img id="imgProximamente" src="{{asset('public/img/proximamente.png')}}" class="img-fluid"></center>
            </div>
            <div class="col-12" id="texto">
                <center><p>Andromeda Institute trae para ti grandes sorpresas esperálas, si gustas más <br> 
                    información visita nuestras redes sociales o mándanos un whatsapp</p></center>
            </div>
            <div class="col-12" id="redes">
              <center>
                <a href="https://api.whatsapp.com/send?phone=522227074364"><i class="fab fa-whatsapp"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.facebook.com/andromedainstituto/"><i class="fab fa-facebook-f"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.instagram.com/andromeda_institute/"><i class="fab fa-instagram"></i></a></center>
            </div>
            
            <div class="col-12" id="formulario">
              <form action="{{url('sendMailProximamente')}}" method="post">
              <div class="row justify-content-center">
                <div class="col-6">
                    <div class="row">
                      <div class="col-12" id="formDatos" style="display: flex">
                        @csrf
                        <input type="text" class="form-control" id="datos" name="datos" placeholder="Escribe tu duda y datos aquí" required>
                        <button type="submit" class="btn btn-primary " id="btnEnviar" > Enviar</button>
                      </div>
                    </div>
                </div> 
              </div>
            </form>
            </div>
            <div class="col-12" id="footer">
              <center><i class="far fa-copyright"></i> Todos los derechos reservados 2022 Andromeda Producciones</center>
              

              <div class="position-relative" hidden>
                <div class="position-absolute bottom-0 end-0"><button id="btnPlay" onclick="playMusic()"><i class="fas fa-volume-up"></i></button></div>
              </div>
              <audio id="fondoM" autoplay loop > 
                <source src="{{asset('public/sound/fondo.mp3')}}" type="audio/mpeg">
              </audio>
            </div>
        </div> 
        
    </div>
  </body>
  <script src='{{asset('public/js/mantenimiento.js')}}?v=0.0.2'></script> 
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='{{asset('public/js/particulaMantenimiento.js')}}'></script> 
</html>   