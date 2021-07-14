<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Paulina Procel, Giovanni Lorenzo, Omar García, Vanessa Juárez">
        <meta name="description" content="Todos los jabones Xapontic; elaborados a mano por mujeres tseltales">
        <meta name="keywords" content="Xapontic, mujeres tseltales, jabones, aroma, artesanal, natural, Chiapas, Chilón">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="https://www.dis.ibero.mx/grupos/2020p/compint3/equipo03/index.html" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Xapontic: Nuestro jabón" />
      <meta property="og:description" content="Xapontic: Nuestro jabón" />
      <meta property="og:image" content="https://www.dis.ibero.mx/grupos/2020p/compint3/equipo03/index.html"/>
        <title>Xapontic: Nuestro Jabón</title>
        <link href="estilos.css" rel="stylesheet">
        <script type="text/javascript" src="scripts.js"></script>
        <script src="https://kit.fontawesome.com/5637dd924f.js" crossorigin="anonymous"></script>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div>
            <header>
                <h1>Xapontic nuestro jabón</h1>
                <nav>
                <h2>Barra de navegación</h2>
                <div class="navMovil"> 
                    <div id="mySidenav" class="sidenav">
                        <ul>
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="quienes_somos.php" target="_self">¿Quiénes somos?</a></li>
                            <li class="lip"><strong>Productos</strong>
                                <ul class="submenu1">
                                    <li><a href="productos.php" target="_self">Productos</a></li>
                                    <li><a href="proceso_de_elaboracion.php" target="_self">Elaboración</a></li>
                                </ul></li>
                            <li><a href="bazares.php" target="_self">Bazares</a></li>
                            <li><a href="novedades.php" target="_self">Novedades</a></li>
                            <li><a href="contacto.php" target="_self">Contacto</a></li>
                            <li><a href="pedido_articulos.php" target="_self">Mi pedido</a></li>
                            <li><a href="cuenta.php" target="_self">Mi cuenta</a></li>
                        </ul>
                    </div>
                     
                    <div onclick="openNav()" class="Menu">
                        <div class="capa1"></div>
                        <div class="capa2"></div>
                        <div class="capa3"></div>
                    </div>
                <div class="iconosNavMovil">
                    <div class="iconos"><a href="pedido_articulos.php" target="_self" class="iconmovil"><i class="fas fa-shopping-bag"></i></a>
                        <div class="carrito" id="car">
                            <?php
                                if (isset($_SESSION["carrito"])){
                                $n = count($_SESSION["carrito"]);
                                $carrito = $_SESSION["carrito"];
                                $numProductosEnCarrito = 0;
                                    for ($i = 0; $i<$n; $i++){
                                    $numProductosEnCarrito += $carrito[$i]["cantidad"];
                                    }
                                    echo $numProductosEnCarrito;
                                }else{
                                echo "";
                                }
                            ?>
                        </div>    
                    </div>
                            
                    <div class="iconos"><a href="cuenta.php" target="_self" class="iconmovil"><i class="far fa-user"></i></a>
                    </div>
                </div>
                </div>
                        <ul id="menuprincipal">
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="quienes_somos.php" target="_self">¿Quiénes somos?</a></li>
                            <li><strong>Productos</strong>
                                <ul class="submenu">
                                    <li><a href="productos.php" target="_self">Productos</a></li>
                                    <li><a href="proceso_de_elaboracion.php" target="_self">Elaboración</a></li>
                                </ul></li>
                            <li><a href="bazares.php" target="_self">Bazares</a></li>
                            <li><a href="novedades.php" target="_self">Novedades</a></li>
                            <li><a href="contacto.php" target="_self">Contacto</a></li>
                            <li><a href="pedido_articulos.php" target="_self">Mi pedido
                                <div class="carrito" id="car">
                                <?php
                                if (isset($_SESSION["carrito"])){
                                 $n = count($_SESSION["carrito"]);
                                 $carrito = $_SESSION["carrito"];
                                 $numProductosEnCarrito = 0;
                                 for ($i = 0; $i<$n; $i++){
                                 $numProductosEnCarrito += $carrito[$i]["cantidad"];
                                }
                                 echo $numProductosEnCarrito;
                                }else{
                                echo "";
                                }
                                ?>    
                                </div>
                                </a>
                            </li>
                            <div class="iconos" id="iconom"><a href="cuenta.php" target="_self"><i class="far fa-user"></i></a>
                            <ul class="submenu2" id="submenu2">
                            <li><a href="cuenta.php" target="_self">Mi cuenta</a></li>
                            <li><a href="logoutUsuario.php" target="_self">Cerrar sesión</a></li>
                            </ul>
                            <?php
                                 echo '<div class="sesionAdminNombre">'.$_SESSION["administrador"];
                                 echo '</div>';
                            ?>
                            </div>
                        </ul>
                    </nav>
            </header>

            <section class="gracias">
                <h2 class="titulo">TU PEDIDO</h2>
                <div>
                <?php
if (isset($_SESSION["carrito"])){
    if (isset($_SESSION["administrador"])){
        include "conexion.php";
        $carrito = $_SESSION["carrito"];
        $idCliente = $_SESSION["idCliente"];
        $totalCompra = 0;
        for ($i=0; $i<count($carrito); $i++){
            $subtotal = $carrito[$i]["cantidad"] * $carrito[$i]["precio"];
            $totalCompra += $subtotal;
        }
        $totalSinIVA = $totalCompra/1.16;
        $iva = $totalSinIVA*0.16;
        $envio = 120;
        $totalPagar = $totalCompra+$envio;

        $sql = "insert into 03_pedido (idCliente, subtotal, iva, envio, total, fechaPedido) values($idCliente, $totalSinIVA, $iva, $envio, $totalPagar, CURRENT_TIMESTAMP)";
        $nada = ejecutar($sql);

        $sql = "select max(idPedido) as idPedido from 03_pedido where idCliente = ".$idCliente;
        $rs = ejecutar($sql);
        $dato = mysqli_fetch_array($rs);
        $idPedido = $dato["idPedido"];

        conectar();
        for ($i=0; $i<count($carrito); $i++){
            $st = $carrito[$i]["cantidad"] * $carrito[$i]["precio"];
            $idP = $carrito[$i]["id"];
            $cantP = $carrito[$i]["cantidad"];
            $sql = "insert into 03_resumenPedido (idPedido, idProducto, cantidad, subtotal) values($idPedido, $idP, $cantP, $st)";
            $nada = query($sql);
        }
        desconectar();

        $flagEmail = true;
        include "emailPedido.php";

        if ($flagEmail){
            echo '<div class="contenedorMensajeGracias">';
            echo '<h3 class="subtitulo">¡Gracias por realizar tu pedido!</h3>';
            echo '<div class="mensajeGracias">Su pedido ha sido registrado.  Lo contactaremos a la brevedad posible para finiquitar el pedido</div>';
            echo '</div>';
        }else{
            echo '<div class="contenedorMensajeGracias">';
            echo '<h3 class="subtitulo">¡Gracias por realizar tu pedido!</h3>';
            echo '<div class="mensajeGracias">Su pedido ha sido registrado.  Por favor contacte a Xapontic al teléfono 919 671 01772 para finiquitar su pedido</div>';
            echo '</div>';

        }
?>
<?php
        $carrito = array();
        unset($_SESSION["carrito"]);

    }else{
        echo '<script language="javascript">';
        echo 'window.location.assign("loginUsuario.php");';
        echo '</script>';

    }
}else{
    echo '<script language="javascript">';
    echo 'window.location.assign("productos.php");';
    echo '</script>';
}
?>
                </div>
            </section>


        <footer>
            <h2>XAPONTIC <br> <span>nuestro jabón</span> </h2>
            <div class="vcard">
                <div class="tel">919 671 01772</div>
                <a class="email" href="mailto:adelacuesta@capeltic.org">adelacuesta@capeltic.org</a>
                <div class="adr">
                 <div class="street-address">Calle Allende #5 Barrio Centro, Chilón, Chiapas</div>
                </div>
               </div>
        <div class="mapadenav">
            <aside>
                <h2>Menú alterno</h2>
                <ul class="menualterno">
                    <li><a href="index.html" target="_self"> <strong>Inicio | </strong> </a></li>
                    <li><a href="quienes_somos.html" target="_self"> ¿Quiénes somos? | </a></li>
                    <li><a href="productos.html" target="_self"> Productos | </a></li>
                    <li><a href="bazares.html" target="_self"> Bazares | </a></li>
                    <li><a href="contacto.html" target="_self"> Contacto | </a></li>
                    <li><a href="pedido_articulos.html" target="_self"> Mi pedido </a></li>
                </ul>
            </aside>
        </div>
        <div class="redes">
        <ul>
        <li class="liredes"><a class="fb" href="https://www.facebook.com/Xapontic/" target="_blank">Facebook</a></li>
        <li class="liredes"><a class="ig" href="https://www.instagram.com/xapontic.mx/?hl=es-la" target="_blank">Instagram</a></li>
        <li class="liredes"><a class="am" href="https://www.amazon.com.mx/s?k=Xapontic+-+Nuestro+Jab%C3%B3n&ref=bl_dp_s_web_0" target="_blank">Amazon</a></li>
        </ul>


    </div>
        <p>Xapontic 2020. Diseño web: Vanessa Juárez, Paulina Procel, Omar García, Giovanni Lorenzo</p>
    </footer>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0"></script>
<script>
  $(".Menu").on('click', function()
{
var Capas = $(".capa1").hasClass("X1");
if(Capas == true)
{
$(".capa1").removeClass("X1");
$(".capa2").removeClass("X2");
$(".capa3").removeClass("X3");
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft = "0";
document.body.style.backgroundColor = "white";
}
else
{
$(".capa1").addClass("X1");
$(".capa2").addClass("X2");
$(".capa3").addClass("X3");
document.getElementById("mySidenav").style.width = "250px";
document.getElementById("main").style.marginLeft = "250px";
document.body.style.backgroundColor = "rgba(0,0,0,0)";  
}
});   
</script>
<script src="js/main.js"></script>
<script>
var addthis_share = {
url: "https://www.dis.ibero.mx/grupos/2020p/compint3/equipo03/index.html",
title: " ",
description: " ",
media: "https://www.dis.ibero.mx/grupos/2020p/compint3/equipo03/index.html"
}
</script>
</body>
</html>