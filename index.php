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
        <meta property="og:url" content="https://www.xapontic.org/index.php" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Xapontic: Nuestro Jabón" />
      <meta property="og:description" content="Xapontic, que quiere decir 'nuestro jabón' en tseltal, es una marca de productos de cuidado e higiene personal, hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de su región." />
      <meta property="og:image" content="https://www.xapontic.org/images/facebook/xapontic_inicio_facebook.jpg"/>
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
                <h1>Xapontic: Nuestro Jabón</h1>
                <nav><h2>Barra de navegación</h2>
                <div class="navMovil"> 
                    <div id="mySidenav" class="sidenav">
                        <ul>
                            <li><a href="index.php" target="_self"><strong>Inicio</strong></a></li>
                            <li><a href="quienes_somos.php" target="_self">¿Quiénes somos?</a></li>
                            <li class="lip">Productos
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
            <li><a href="index.php" target="_self"> <strong>Inicio</strong> </a></li>
            <li><a href="quienes_somos.php" target="_self">¿Quiénes somos?</a></li>
            <li>Productos
                <ul class="submenu">
                    <li><a href="productos.php" target="_self">Productos</a></li>
                    <li><a href="proceso_de_elaboracion.php" target="_self">Elaboración</a></li>
                </ul>
            </li>
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
                    <div class="container-all">
                        <input type="radio" id="1" name="image-slide" hidden/>
                        <input type="radio" id="2" name="image-slide" hidden/>
                        <input type="radio" id="3" name="image-slide" hidden/>
                        <div class="slide">
                            <div class="item-slide">
                                <img src="imagenes/contenido/foto_de_mujeres_xapontic.png" alt="Foto de mujeres de Xapontic cocinando">
                                <p>Nuestros jabones, estan hechos con ingredientes que recolectamos de la naturaleza</p>
                            </div>
                          <div class="item-slide">
                                <img src="imagenes/contenido/mujeres_en_chiapas_xapontic.png" alt="Foto de mujeres en la sierra de Chiapas">
                            </div>
                            <div class="item-slide">
                                <img src="imagenes/contenido/mujeres_con_jabon_xapontic.png" alt="Foto de mujeres con jabón Xapontic">
                            </div>
                        </div>
                        <div class="slidemovil">
                            <div class="item-slidemovil">
                                <img src="imagenes/contenido/foto_de_mujeres_xapontic_movil.png" alt="Foto de mujeres de Xapontic cocinando">
                                <p>Nuestros jabones, estan hechos con ingredientes que recolectamos de la naturaleza</p>
                                 </div>
                          <div class="item-slidemovil">
                                <img src="imagenes/contenido/mujeres_en_chiapas_xapontic_movil.png" alt="Foto de mujeres en la sierra de Chiapas">
                            </div>
                            <div class="item-slidemovil">
                                <img src="imagenes/contenido/mujeres_con_jabon_xapontic_movil.png" alt="Foto de mujeres con jabón Xapontic">
                            </div>
                        </div>
                        <div class="pagination">
                            <label class="pagination-item" for="1">
                                 </label>
                            <label class="pagination-item" for="2">
                                </label>
                            <label class="pagination-item" for="3">
                                </label>
                        </div>
                    </div>
            </header>

            <?php 
    include "conexion.php";
    $sql3 = "select * from 03_productos where presentacion = '125 gr' and (nombreProducto like '%Cacao' or nombreProducto like '%Lavanda' or nombreProducto like '%Romero')";
    $rs3 = ejecutar ($sql3);

?>            
            <section class="nosotrashome">
                <h2 class="titulo">SOBRE NOSOTRAS</h2>
                <p> <strong>Xapontic</strong> es el fruto del <strong>empoderamiento</strong> de las mujeres indígenas <em>tseltales</em>, organizadas en trabajo colectivo para construir una alternativa económica más justa, digna e incluyente.</p>
                <p><a href="quienes_somos.php" target="_self" class="vermas">VER MÁS</a></p>
            </section>
            <section class="productoshome">
                <h2 class="titulo">NUESTROS PRODUCTOS</h2>

                <?php 
                while ($datos = mysqli_fetch_array($rs3)){  
                    echo '<article>';
                    echo '<h3>'.$datos["nombreProducto"].'</h3>';
                    echo '<figure><a href="productos_xt.php?id='.$datos["idProducto"].'" target="_self"><img src="'.$ruta.$datos["foto"].'" alt="'.$datos["nombreProducto"].'"></a></figure>';

                    echo '<button type="button" class="precioh" onClick="producto('.$datos["idProducto"].')">Ver detalles</button>' ;
                    echo '</article>';
                }
                    ?>         
                <p><a href="productos.php" target="_self" class="vermas">VER MÁS</a></p>
                 </section>

            <section class="elaboracionhome">
                <h2 class="titulo">NUESTRO PROCESO DE ELABORACIÓN</h2>
                <article>
                    <h3>Pesar los materiales</h3>
                </article>
                <article>
                    <h3>Cortado</h3>
                </article>
                <article>
                    <h3>Disolución de jugo</h3>
                </article>
                <p><a href="proceso_de_elaboracion.php" target="_self" class="vermas">VER MÁS</a></p>
            </section>
            <section class="bazareshome">
                <h2 class="titulo">PRÓXIMOS BAZARES</h2>
                <article>
                    <h3 class="subtitulo">Bazar Fusión</h3>
                    <p>Conoce la Casa del Diseño y Artesanía Mexicana de la CDMX...</p>
                    <figure><img src="imagenes/contenido/imagen_del_bazar_fusion.png" alt="Foto del bazar Fusión">
                    </figure>
                </article>
                <p><a href="bazares.php" target="_self" class="vermas">VER MÁS</a></p>
            </section>
            <section  class="novedadeshome">
                <h2 class="titulo">NOVEDADES</h2>
                <article><a href="novedades.php" target="_self" class="linknovedades">
                    <h3 class="subtitulo">Jabón de rosas</h3>
                    <figure><img src="imagenes/contenido/jabon_de_lavanda.png" alt="Foto del jabón Xapontic de Rosas"></figure>
                    <p class="fecha">9 feb 2020</p>
                    <p>Lanzamiento de nuevo jabón elaborado a base de rosas. Rico en vitamina E, K...</p>
                </a>
                </article>
                <article><a href="novedades.php" target="_self" class="linknovedades">
                    <h3 class="subtitulo">Nos expandimos</h3>
                    <figure><img src="imagenes/contenido/jabon_de_lavanda.png" alt="Foto del jabón Xapontic de Rosas"></figure>
                    <p class="fecha">12 mar 2020</p>
                    <p>Debido a al incremento a la demanda del producto. ¡Nos expandimos! ...</p>
                </a>
                </article>
                <article><a href="novedades.php" target="_self" class="linknovedades">
                    <h3 class="subtitulo">Jabón de gardenia</h3>
                    <figure><img src="imagenes/contenido/jabon_de_lavanda.png" alt="Foto deñ jabón Xapontic de Rosas"></figure>
                    <p class="fecha">20 feb 2020</p>
                    <p>Lanzamiento de nuevo jabón elaborado a base de flor de gardenia. Rico en vitamina E, K...</p>
                </a>
                </article>
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
                        <li><a href="index.php" target="_self"> <strong>Inicio | </strong> </a></li>
                        <li><a href="quienes_somos.php" target="_self"> ¿Quiénes somos? | </a></li>
                        <li><a href="productos.php" target="_self"> Productos | </a></li>
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
    
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f18700a9e27faaf"></script>  
<script type="text/javascript">
 var addthis_share = {
url: "https://www.xapontic.org/index.php",
title: "Xapontic: Nuestro Jabón",
 description: "Xapontic, que quiere decir “nuestro jabón” en tseltal, es una marca de Productos de cuidado e higiene personal, Hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de su región",
media: "https://www.xapontic.org/images/facebook/xapontic_inicio_facebook.jpg"
 }
</script>

    </body>
</html>