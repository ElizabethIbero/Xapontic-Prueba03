function validarRegistrate(){
    var flag = false;
    for (var i=1; i<=5; i++){
        if (document.getElementById("c"+i).value == "") flag = true;
    }
    if (flag){
        document.getElementById("msj2").innerHTML="Llene todos los campos";
    }else if (document.getElementById("c4").value == document.getElementById("c5").value){
        document.getElementById("msj2").innerHTML="";
        document.getElementById("f2").submit();
    }else{
        document.getElementById("msj2").innerHTML="Las contraseñas no coinciden";
   }
}

function mostrarPassword(){
    var campo = document.getElementById("c4");
    var icono = document.getElementById(1);
    if (campo.type=="password"){
        campo.type="text";
        icono.classList.toggle("fa-eye-slash", false);
        icono.classList.toggle("fa-eye", true);
    }else{
        campo.type="password";
        icono.classList.toggle("fa-eye", false);
        icono.classList.toggle("fa-eye-slash", true);
    }
}

function mostrarPassword2(){
    var campo = document.getElementById("c5");
    var icono = document.getElementById(2);
    if (campo.type=="password"){
        campo.type="text";
        icono.classList.toggle("fa-eye-slash", false);
        icono.classList.toggle("fa-eye", true);
    }else{
        campo.type="password";
        icono.classList.toggle("fa-eye", false);
        icono.classList.toggle("fa-eye-slash", true);
    }
}

$(document).ready(function(){
    $("#iconom").hover(function(){
        if (isset($_SESSION["administrador"])){
            document.getElementById("submenu2").style.display="block";
        }else{
            document.getElementById("submenu2").style.display="none";
        }
    }, function(){
        document.getElementById("submenu2").style.display="none";
    }   
    
    );
  });

function editar(id){
    window.location.assign("editar_cuenta.php?id="+id);
}


function validarIngresoDatos(){
    var flag = false;
    for (var i=1; i<=9; i++){
        if (document.getElementById("c"+i).value == "") flag = true;
    }
    if (flag){
        alert("Los campos marcados con * son obligatorios");
    }else{
        document.getElementById("msjcuenta").innerHTML="";
        document.getElementById("f1").submit();
   }
}

function validarEdicion(){
    var flag = false;
    for (var i=1; i<=11; i++){
        if (document.getElementById("z"+i).value == "") flag = true;
    }
    if (flag){
        alert("Los campos marcados con * son obligatorios");
    }else{
        document.getElementById("msjedit").innerHTML="";
        document.getElementById("f3").submit();
   }
}

function validarFormularioCuenta(){
    window.location.assign("pedido_articulos.html");
}

function cancelarEdicion(){
    window.location.assign("cuenta.php");
}

function enviarpedido(){
    window.location.assign("gracias.php");
}

function producto(id){  
    window.location.assign("productos_xt.php?id="+id); 
    //document.getElementById("f5").submit(); 
}
function realizar(){
        document.getElementById("f5").submit();
}

function aumentarArticulo(){
    var n = document.getElementById("cant").value;
    n++;
    document.getElementById("cantidad").innerHTML = n;
    document.getElementById("cant").value = n;
}

function quitarArticulo(){
    var n = document.getElementById("cant").value;
    if (n > 0){
        n--;
        document.getElementById("cantidad").innerHTML = n;
        document.getElementById("cant").value = n;
    }
}

function disminuirPiezaProducto(index){
    window.location.assign("modificarCarrito.php?accion=quitar&index="+index); 
}


function aumentarPiezaProducto(index){
    window.location.assign("modificarCarrito.php?accion=aumentar&index="+index); 
}

function eliminarDelCarrito(index){
    var r = confirm("Desea eliminar este producto?");
    if (r) window.location.assign("modificarCarrito.php?accion=eliminar&index="+index); 
}


var header = document.getElementById("gramajes");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
function validarContacto(){
    var flag = false;
    for (var i=1; i<=4; i++){
        if (document.getElementById("c"+i).value == "") flag = true;
    }
    if (flag){
        document.getElementById("msjcontacto").innerHTML="Llene todos los campos";
    }else{
        document.getElementById("msjcontacto").innerHTML="";
        document.getElementById("f3").submit();
   }
}
