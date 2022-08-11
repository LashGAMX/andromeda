var base_url = "http://127.0.0.1:8000/";
var sw = false;
window.CSRF_TOKEN = '{{ csrf_token() }}';
function playMusic(){
    if(sw == true)
    {
        $("#fondoM")[0].play();
        sw = false;
    } else{
        $("#fondoM")[0].pause();
        sw = true
    }
}
function autoMusic(){
    // $("#fondoM")[0].play();
    var promise = document.getElementById("fondoM").play();

  if (promise !== undefined) {
    promise.then(_ => {
      // Autoplay started!
      $("#fondoM")[0].play();
    }).catch(error => {
      // Autoplay was prevented.
      // Show a "Play" button so that user can start playback.
    });
  }
}
// function sendMail() {
//   if($("#datos").val() == "")
//   {
//     alert("Please");
//   }else{
//     $.ajax({
//       type: 'POST',
//       url: base_url + "sendMailProximamente",
//       data: {
//           texto: $("#datos").val(),
//           // _token: $('input[name="_token"]').val(),
//       },
//       dataType: "json",
//       async: false,
//       success: function (response) {            
//           console.log(response);
//       }});
//   }
// }