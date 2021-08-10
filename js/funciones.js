document.getElementById("btnenviar").addEventListener("click", function(event){
    event.preventDefault();
    window.location="panel.html";
  });

    function mostrarFormulario(id)
{
	var contenedor=document.getElementById("formu");
	contenedor.style.display="block";
}


/* Funcion para valores*/
var time, position, resultados;

function obtenerDatos(){
    var x1 = document.getElementById("x1").value;
    var v1 = document.getElementById("v1").value;
    var a1 = document.getElementById("a1").value;
    var x2 = document.getElementById("x2").value;
    var v2 = document.getElementById("v2").value;
    var a2 = document.getElementById("a2").value;

    var r = [x1, x2, v1, v2, a1, a2];
    return r;
}

resultados = obtenerDatos();

var x1 = resultados[0];
var x2 = resultados[1];
var v1 = resultados[2];
var v2 = resultados[3];
var a1 = resultados[4];
var a2 = resultados[5];


function limpiar(){
  document.getElementById("matricula").value="";
  document.getElementById("nombre").value="";
  document.getElementById("apellidos").value="";
  document.getElementById("grupo").value="";
  document.getElementById("carrera").value="";
  document.getElementById("grado").value="";
}