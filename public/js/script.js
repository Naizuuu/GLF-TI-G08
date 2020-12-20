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

function obtenerValores(contents) {
    let valores = contents.split(/\s*\s/);
    var expRegular = /^((P|C){1});([0-9]){1,2};((-?[0-9]){1,5}),((-?[0-9]){1,5})$/;
    var verificador = true;
    crearCookie("sizeArray", valores.length.toString());
    for(let i = 0; i < valores.length; i++) {
        if(expRegular.test(valores[i])) {
            crearCookie("valorN" + i, valores[i].toString());
            console.log(expRegular.test(valores[i]));
        } else {
            verificador = false;
            console.log(expRegular.test(valores[i]));
        }
    }
    if(!verificador) {
        alert("Su archivo de parámetros está erróneo. Por favor arréglelo antes de continuar.");
        input.value = "";
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