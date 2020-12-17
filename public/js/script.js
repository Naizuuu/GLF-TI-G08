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
        editor.value = reader.result;
        reader.onloadend = () => obtenerValores(reader.result);
    }
    reader.readAsText(file);
}

/* Tomar valores del archivo de texto y pasarlo a cookies que duran 10 segundos */
function obtenerValores(contents) {
    let valores = contents.split(/\n/);
    /* console.log(valores.length); */
    crearCookie("sizeArray", valores.length.toString());
    for(let i = 0; i < valores.length; i++) {
        crearCookie("valorN" + i, valores[i].toString());
    }
}

/* ----------------------- EFECTO DEL INICIO --------------------- */

$(document).ready(function(){
    $('#homepage').delay(1500).fadeOut('slow');
    $('#form').delay(2300).fadeIn('slow');
});

/* ------------------------- CREAR COOKIES ------------------- */

function crearCookie(name, value) { 
    document.cookie = escape(name) + "=" +  
        escape(value) + "; max-age=10" + "; domain=localhost";
}

/* --------------------------------------------------------------- */

/* let area = document.getElementById('area');

area.addEventListener('dragover', e => e.preventDefault());
area.addEventListener('drop', readFile);

function readFile (e) {
  e.preventDefault();
  let file = e.dataTransfer.files[0];
  
  if (file.type === 'text/plain') {
    let reader = new FileReader();
    reader.onloadend = () => printFileContents(reader.result);
    reader.readAsText(file, 'ISO-8859-1');
  } else {
    alert('¡He dicho archivo de texto!');
  }
}

function printFileContents (contents) {
    area.style.lineHeight = '30px';
    area.textContent = '';
    let lines = contents.split(/\n/);
    alert(lines[5]);
    lines.forEach(line => area.textContent += line + '\n');
} */


// Creating a cookie after the document is ready 
/* $(document).ready(function () { 
    createCookie("gfg", "GeeksforGeeks", "10"); 
}); 
   
// Function to create the cookie 
function createCookie(name, value, days) { 
    var expires; 
      
    if (days) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expires = ""; 
    } 
      
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=/"; 
}  */
