
function validarSesion(){
    var flag = false;
    for (var i=1; i<=2; i++){
        if (document.getElementById("b"+i).value == "") flag = true;
    }
    if (flag){
        document.getElementById("msj1").innerHTML="Llene todos los campos";
    }else{
        document.getElementById("msj1").innerHTML="";
        //hacemos el submit del formulario
        document.getElementById("f1").submit();
   }
}

function validarRegistrate(){
    var flag = false;
    for (var i=1; i<=3; i++){
        if (document.getElementById("c"+i).value == "") flag = true;
    }
    if (flag){
        document.getElementById("msj2").innerHTML="Llene todos los campos";
    }else{
        document.getElementById("msj2").innerHTML="";
        //hacemos el submit del formulario
        document.getElementById("f2").submit();
   }
}
var botonmorado = "height: 30px;color:rgb(255,255,255); background-color:rgb(106,35,136);";
var botonblanco = "height: 35px;color:rgb(0,0,0); background-color:rgb(255,255,255);";

function presentacion25(){
document.getElementById("g1").style = botonmorado;
document.getElementById("g2").style = botonblanco;
document.getElementById("g3").style = botonblanco;
document.getElementById("g4").style = botonblanco;
document.getElementById("precio_jabon").innerHTML="12";
}

function presentacion40(){
document.getElementById("g1").style = botonblanco;
document.getElementById("g2").style = botonmorado;
document.getElementById("g3").style = botonblanco;
document.getElementById("g4").style = botonblanco;
document.getElementById("precio_jabon").innerHTML="20";
}

function presentacion80(){
document.getElementById("g1").style = botonblanco;
document.getElementById("g2").style = botonblanco;
document.getElementById("g3").style = botonmorado;
document.getElementById("g4").style = botonblanco;
document.getElementById("precio_jabon").innerHTML="30";
}

function presentacion120(){
document.getElementById("g1").style = botonblanco;
document.getElementById("g2").style = botonblanco;
document.getElementById("g3").style = botonblanco;
document.getElementById("g4").style = botonmorado;
document.getElementById("precio_jabon").innerHTML="50";
}