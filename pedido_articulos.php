<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Paulina Procel, Giovanni Lorenzo, Omar García, Vanessa Juárez">
        <meta name="description" content="Xapontic, somos una organización de mujeres tseltales que, a través de procesos económicos eficaces, fortalezca el sistema de medios de vida de sus familias, buscando la autonomía económica para la defensa del territorio, como parte de Yomol A’tel. ">
        <meta name="keywords" content="jabones orgánicos, jabones, jabones naturales, jabones de glicerina, jabones artesanales, jabones hechos a mano, jabón de glicerina, jabonería, menta, cacao, jabones xapontic, xapontic, jabones mexicanos, jabones mexico, méxico, chiapas, jabones de chiapas, empoderamiento de mujeres, mujeres tseltales, mujeres indígenas, ingredientes naturales">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="https://www.xapontic.org/pedido_articulos.php" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Xapontic: Tu Pedido" />
      <meta property="og:description" content="Xapontic, que quiere decir 'nuestro jabón' en tseltal, es una marca de productos de cuidado e higiene personal, hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de su región." />
      <meta property="og:image" content="https://www.xapontic.org/images/facebook/xapontic_pedido_articulos_facebook.jpg"/>
        <title>Xapontic: Tu Pedido</title>
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
<h1>Xapontic: Nuestro Jabón</h1>
<nav>
    <h2>Barra de navegación</h2>
    <div class="navMovil"> 
                    <div id="mySidenav" class="sidenav">
                        <ul>
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="quienes_somos.php" target="_self">¿Quiénes somos?</a></li>
                            <li class="lip">Productos
                                <ul class="submenu1">
                                    <li><a href="productos.php" target="_self">Productos</a></li>
                                    <li><a href="proceso_de_elaboracion.php" target="_self">Elaboración</a></li>
                                </ul></li>
                            <li><a href="bazares.php" target="_self">Bazares</a></li>
                            <li><a href="novedades.php" target="_self">Novedades</a></li>
                            <li><a href="contacto.php" target="_self">Contacto</a></li>
                            <li><a href="pedido_articulos.php" target="_self"><strong>Mi pedido</strong></a></li>
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
            <li>Productos
                <ul class="submenu">
                    <li><a href="productos.php" target="_self">Productos</a></li>
                    <li><a href="proceso_de_elaboracion.php" target="_self">Elaboración</a></li>
                </ul></li>
            <li><a href="bazares.php" target="_self">Bazares</a></li>
            <li><a href="novedades.php" target="_self">Novedades</a></li>
            <li><a href="contacto.php" target="_self">Contacto</a></li>
            <li><a href="pedido_articulos.php" target="_self"> <strong> Mi pedido </strong>
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
            <div class="iconos"><a href="cuenta.php" target="_self"><i class="far fa-user"></i></a>
            <ul class="submenu2">
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
            <section class="tupedido">
            <h2 class="titulo">TU PEDIDO</h2>

            
                    <?php
                    if (isset($_SESSION["carrito"])){
                    include "conexion.php";

                    if (count($carrito) == 0){
                        unset($_SESSION["carrito"]);
                        echo '<script language="javascript">';
                        echo 'window.location.assign("productos.php");';
                        echo '</script>';
                    }

                    echo '<div class="resumenpedido">';
                    echo '<div class="contenedorPedido">';
                    $carrito = $_SESSION["carrito"];
                    $totalCompra = 0;

                    echo '<div class="productoT">Artículo</div>';
                    echo '<div class="gramajeT">Gramaje</div>';
                    echo '<div class="precioUnitarioT">Precio</div>';
                    echo '<div class="cantidadT">Cantidad</div>';
                    echo '<div class="subtotalT">Subtotal</div>';
                    echo '<div class="eliminarT">Eliminar</div>';

                    for($i=0; $i<count($carrito); $i++){
                        echo '<div class="producto">'.$carrito[$i]["producto"].'</div>';
                        echo '<div class="gramaje">'.$carrito[$i]["gramaje"].'</div>';
                        echo '<div class="precioUnitario">$'.number_format($carrito[$i]["precio"],2,".",",").'</div>';


                        echo '<div class="cantidad">';
                        echo '<button type="button" class="botonCantidad" onClick="disminuirPiezaProducto('.$i.')"><i class="fas fa-minus-circle"></i></button>';
                        echo $carrito[$i]["cantidad"];
                        echo '<button type="button" class="botonCantidad" onClick="aumentarPiezaProducto('.$i.')"><i class="fas fa-plus-circle"></i></button>';
                        echo '</div>';

                        echo '<div class="subtotal">$'.number_format($carrito[$i]["cantidad"] * $carrito[$i]["precio"],2,".",",").'</div>';
                       
                        echo '<div class="eliminar">';
                        echo '<button type="button" class="botonCantidad" onClick="eliminarDelCarrito('.$i.')">';
                        echo '<i class="fas fa-trash"></i></button>';
                        echo '</div>';

                        $subtotal = $carrito[$i]["cantidad"] * $carrito[$i]["precio"];
                        $totalCompra += $subtotal;
                        
                                            
                    }
                        $totalSinIVA = $totalCompra/1.16;
                        $iva = $totalSinIVA*0.16;
                        $envio = 120;
                        $totalPagar = $totalCompra+$envio;

                    echo '</div>';
                    echo '</div>';

                    echo '<div class="totalCompra">';
                    echo '<div class="contenedorTotalCompra">';

                    echo '<div class="vacio"></div>';
                    echo '<div class="textos">Subtotal productos:</div>';
                    echo '<div class="totales">$'.number_format($totalSinIVA,2,".",",").'</div>';

                    echo '<div class="vacio"></div>';
                    echo '<div class="textos">IVA:</div>';
                    echo '<div class="totales">$'.number_format($iva,2,".",",").'</div>';


                    echo '<div class="vacio"></div>';
                    echo '<div class="textos">Total compra:</div>';
                    echo '<div class="totales">$'.number_format($totalCompra,2,".",",").'</div>';

                    echo '<div class="vacio"></div>';
                    echo '<div class="textos">Gastos envío:</div>';
                    echo '<div class="totales">$'.number_format($envio,2,".",",").'</div>';

                    echo '<div class="vacio"></div>';
                    echo '<div class="textosTotalPagar">Total a pagar:</div>';
                    echo '<div class="totalPagar">$'.number_format($totalPagar,2,".",",").'</div>';

                    echo '</div>';
                    echo '</div>';


                    echo '<div class="botones">';
                    echo '<p class="seguirviendo"><a href="productos.php" target="_self" class="botonseguir">SEGUIR VIENDO</a></p>';
                    echo '<p class="realizarpedido"><a href="resumen_pedido.php" target="_self" class="botonseguir">REALIZAR PEDIDO</a></p>';
                    echo '</div>';


                }else{

                    echo '<h3 class="subtitulo">No has seleccionado ningún artículo </h3>';
                }
                    ?>
                

        <p class="aviso">El pago no se realizará en el sitio web, aquí solamente podrás seleccionar los productos que te interesan.<br> Le daremos seguimiento a tu pedido vía telefónica. <br> Horario de atención: Lunes a viernes de <span>8 am - 5 pm</span> </p>
    </section>

        <footer>
            <h2>XAPONTIC <br> <span>nuestro jabón</span> </h2>
            <div class="vcard">
                <div class="tel"><a href="tel:+529196710172" target="_blank" title="tel:+52919617017">919 671 0172</a></div>
                <a class="email" href="mailto:contacto@batsilmaya.org?&amp;subject=Solicitud%20de%20información&amp;body=Hola%20estoy%20interesado/a%20en%20recibir%20m&aacute;s%20informaci&oacute;n%20de%20Xapontic<br>Nombre%20completo:%20<br>Tel&eacute;fono%20de%20contacto:%20<br>Servicio%20de%20inter&eacute;s:%20<br>Comentarios%20adicionales:%20" target="_blank" title="Xapontic: Contacto" title="Enviar Correo">contacto@batsilmaya.org</a>
                <div class="adr">
                    <div class="street-address">Calle Allende #5 Barrio Centro, Chilón, Chiapas</div>
                </div>
           </div>
        <div class="mapadenav">
            <aside>
                <h2>Menú alterno</h2>
                <ul class="menualterno">
                    <li><a href="index.html" target="_self"> Inicio | </a></li>
                    <li><a href="quienes_somos.html" target="_self"> ¿Quiénes somos? | </a></li>
                    <li><a href="productos.html" target="_self"> Productos | </a></li>
                    <li><a href="bazares.html" target="_self"> Bazares | </a></li>
                    <li><a href="contacto.html" target="_self"> Contacto | </a></li>
                    <li><a href="pedido_articulos.php" target="_self"> <strong> Mi pedido</strong> </a></li>
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

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f18700a9e27faaf"></script>  
<script type="text/javascript">
 var addthis_share = {
url: "https://www.xapontic.org/pedido_articulos.php",
title: "Xapontic: Tu Pedido",
 description: "Xapontic, que quiere decir “nuestro jabón” en tseltal, es una marca de Productos de cuidado e higiene personal, Hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de su región",
media: "https://www.xapontic.org/images/facebook/xapontic_pedido_articulos_facebook.jpg"
 }
</script>

</body>
</html>