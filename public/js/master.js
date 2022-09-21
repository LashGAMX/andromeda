jQuery(document).ready(function( $ ) {
    $(window).scroll(function(){
        if($(this).scrollTop() > 1) {
            $('#logo').attr('src','https://www.andromedaproducciones.com/public/img/logo2.png')
        }
        if($(this).scrollTop() < 1) {        
            $('#logo').attr('src','https://www.andromedaproducciones.com/public/img/logo.png')
            // $('#titulop').attr('style','text-transform: capitalize;color: #000')
        }
    });
  });