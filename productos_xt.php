<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Paulina Procel, Giovanni Lorenzo, Omar García, Vanessa Juárez">
        <meta name="description" content="Xapontic, somos una organización de mujeres tseltales que, a través de procesos económicos eficaces, fortalezca el sistema de medios de vida de sus familias, buscando la autonomía económica para la defensa del territorio, como parte de Yomol A’tel. ">
        <meta name="keywords" content="Xapontic, mujeres tseltales, autonomía económica, defensa del territorio, Yomol A’tel, Chiapas, Chilón">
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
      <nav><h2>Barra de navegación</h2>
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

            <?php 
if (isset($_REQUEST["id"])){
    $idProducto = $_REQUEST["id"];
    include "conexion.php";
    $sql = "select * from 03_productos where idProducto = ".$idProducto;
    $rs = ejecutar($sql);
    $datos = mysqli_fetch_array($rs);
    $nombreProducto = $datos["nombreProducto"];
    $sql2 = "select * from 03_productos where nombreProducto='$nombreProducto'";
    $rs2 = ejecutar($sql2);

    $sql3 = "select * from 03_productos where presentacion = '125 gr' and (nombreProducto like '%Cacao' or nombreProducto like '%Lavanda' or nombreProducto like '%Romero')";
    $rs3 = ejecutar ($sql3);

?>
            <div id="divjaboninterno">
            <div id="divjaboninterno2">
            <div id="producto_ingredientes">
            <p class="regresar"><a href="productos.php" target="_self">productos</a></p>
            <section class="jaboninterno">
                <h2 class="subtitulo_jabon" id="tituloJabon"><?php echo $datos["nombreProducto"]." ".$datos["presentacion"]; ?></h2>
                <p class="precio_jabon">$<span id="precio_jabon"> <?php echo $datos["precioUnidad"]?> </span> <abbr title="pesos mexicanos">MXN</abbr></p>            
                <article class="beneficios_jabon">
                    <h3 class="subtitulo_jabon">BENEFICIOS</h3>
                    <p><?php echo $datos["beneficios"]?></p>
                </article>
                <?php 
                echo '<figure><a href="productos_xt.php?id='.$datos["idProducto"].'" target="_self"><img src="'.$ruta.$datos["foto"].'" alt="'.$datos["nombreProducto"].'"></a></figure>';
                echo '<form method="post" action="carrito.php" id="f5">';
                echo '<input type="hidden" name="id" value="'.$datos["idProducto"].'">';
                echo '<input type="hidden" name="producto" value="'.$datos["nombreProducto"].'">';
                echo '<input type="hidden" name="precio" value="'.$datos["precioUnidad"].'">';
                echo '<input type="hidden" name="gramaje" value="'.$datos["presentacion"].'">';
                echo '<input type="hidden" name="cant" value="1" id="cant">';
               echo '</form>';
                ?>

                <div class="datos_jabon"> 
                    <p class="gram">Gramos:</p>

                    <?php 
                    $n = "active";
                while ($datos = mysqli_fetch_array($rs2)){  
                    echo '<div id="gramajes">';
                    echo '<button type="button" class="btn '.$n.'" onClick="producto('.$datos["idProducto"].')"> '.$datos["presentacion"].'</button>' ;
                    echo '</div>';
                }
                    ?> 
                

                     </div>
                <?php 
                echo '<div id="pedido_jabon">';
                echo '<div class="cantidad">';
                echo '<button type="button" class="botonCantidad" onClick="quitarArticulo()"><i class="fas fa-minus-circle"></i></button> <span id="cantidad"> 1 </span>';
                echo '<button type="button" class="botonCantidad" onClick="aumentarArticulo()"><i class="fas fa-plus-circle"></button></i></div>';
                echo '<button class="realizar_pedido" onClick="realizar()">AGREGAR</button>';
                echo '</div>';
                echo '</div>';
                ?>
            </section>
           

            <section class="ingredientes">
                <h2 class="subtitulo_jabon">INGREDIENTES:</h2>
                <div>
                <article>
                    <figure> <img src="imagenes/iconos/producto_icono_miel.png" alt="Miel y cera órganica"></figure>
                    <h3>MIEL Y CERA DE ABEJA ORGÁNICA</h3>
                </article>
                <article>
                    <figure> <img src="imagenes/iconos/producto_icono_avena.png" alt="Hojuelas de avena"></figure>
                    <h3>HOJUELAS DE AVENA</h3>
                </article>
                <article>
                    <figure> <img src="imagenes/iconos/producto_icono_aceites_esenciales.png" alt="Mezcla de aceites esenciales"></figure>
                    <h3>ACEITES ESENCIALES</h3>
                </article>
                </div>
            </section>
            </div>
            </div>
            <section class="productosrecomendados">

                <h2 class="subtitulo_jabon">OTROS JABONES QUE TE ENCANTARÁN</h2>



                <div>
                <?php 
                while ($datos = mysqli_fetch_array($rs3)){  
                    echo '<article class="jabon">';
                    echo '<h3>'.$datos["nombreProducto"].'</h3>';
                    echo '<figure><a href="productos_xt.php?id='.$datos["idProducto"].'" target="_self"><img src="'.$ruta.$datos["foto"].'" alt="'.$datos["nombreProducto"].'"></a></figure>';

                    echo '<button type="button" class="precio" onClick="producto('.$datos["idProducto"].')">Ver detalles</button>' ;
                    echo '</article>';
                }
                    ?> 
                </div>





                <p><a href="productos.php" target="_self" class="vermasinterno">VER MÁS</a></p>
            </section>
        </div>
<?php
}else{
    echo "<script language='javascript'>";
    echo "window.location.assign('productos.php');";
    echo "</script>";
}
?>
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
                    <li><a href="index.php" target="_self"> Inicio | </a></li>
                    <li><a href="quienes_somos.php" target="_self"> ¿Quiénes somos? | </a></li>
                    <li><a href="productos.php" target="_self"><strong> Productos | </strong></a></li>
                    <li><a href="bazares.php" target="_self"> Bazares | </a></li>
                    <li><a href="contacto.php" target="_self"> Contacto | </a></li>
                    <li><a href="pedido_articulos.php" target="_self"> Mi pedido </a></li>
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