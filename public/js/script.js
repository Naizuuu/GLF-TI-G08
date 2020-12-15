/* var stepZero = document.getElementById('stepZero');
var stepOne = document.getElementById('stepOne');
var stepTwo = document.getElementById('stepTwo');


$(stepTwo).ready(function(){
    if ($("#stepTwo").html().length > 0) {
      $('#stepOne').hide();
    }                                           
});

$(document).ready(function(){
    $("#navUno").click(function() {
        $(".procesoUno").toggleClass('oculto');
    });
    $("#navDos").click(function() {
        $(".procesoDos").toggleClass('oculto');
    });
    $("#navTres").click(function() {
        $(".procesoTres").toggleClass('oculto');
    });
}); */

/* LEER ARHCIVO INGRESADO Y ACTUALIZAR EL TEXTAREA AUTOMATICAMENTE */

const input = document.getElementById('file_parametros');
const editor = document.getElementById('contenido_parametros');
input.addEventListener('change', function () {
  if (input.files.length > 0) {
    readFile(input.files[0]);
  }
});

function readFile(file) {
  const reader = new FileReader();
  reader.onload = function() {
    editor.value= reader.result; 
  }
  reader.readAsText(file);
}
/* --------------------------------------------------------------- */

$(document).ready(function(){
    $('#homepage').delay(1500).fadeOut('slow');
    $('#form').delay(2300).fadeIn('slow');
});
