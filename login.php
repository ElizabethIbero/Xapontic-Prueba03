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
        <meta property="og:url" content="https://www.xapontic.org/login.php" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Xapontic: Login" />
      <meta property="og:description" content="Xapontic, que quiere decir 'nuestro jabón' en tseltal, es una marca de productos de cuidado e higiene personal, hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de su región." />
      <meta property="og:image" content="https://www.xapontic.org/images/facebook/xapontic_login_facebook.jpg"/>
        <title>Xapontic: Login</title>
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

            <section class="sectionsesion">
            <h2 class="titulo">INICIAR SESIÓN / CREAR CUENTA</h2>
            <?php 
            include "conexion.php";
            ?>
            <article class="iniciosesion">
                <form class="formlogin" method = "post" action = "login_xt.php" id="f1">
                        <div class="subtitulo">Inicia Sesión</div>
                        <div class="camposFormulario"><input type="text" placeholder="Nombre de usuario" name="usuario" class="campos" id="b1"/></div>      
                        <div class="camposFormulario"><input type="password" placeholder="Contraseña" name="contraseña" class="campos" id="b2"/></div>      
                        <div class="camposForm"><button type="submit" class="botonform">ENTRAR</button></div>
                        <div class="camposFormulario"><span id="msj1" class="mensaje"></span></div>
                    </form>
            </article>

            <article class="registrate">
                <form  class="formlogin" method = "post" action = "registrate_xt.php" id="f2">
                        <div class="subtitulo">Regístrate</div>
                        <div class="camposFormulario"><input type="text" placeholder="Nombre" name="nombreCliente" class="campos" id="c1"/></div>
                        <div class="camposFormulario"><input type="text" placeholder="Apellidos" name="apellido" class="campos" id="c2"/></div>
                        <div class="camposFormulario"><input type="text" placeholder="Nombre de usuario" name="usuario" class="campos" id="c3"/></div>  
                        <div class="contenedorpw"><div class="camposFormulario"><input type="password" placeholder="Contraseña" name="contraseña" class="campos" id="c4"/></div>
                        <div class="passwordc"><button type="button" class="iconButton" onclick="mostrarPassword()">
                        <i class="fas fa-eye-slash" id="1"></i></button></div></div>
                        <div class="contenedorpw"><div class="camposFormulario"><input type="password" placeholder="Repite tu contraseña" class="campos" id="c5"/></div>
                        <div class="passwordc"> <button type="button" class="iconButton" onclick="mostrarPassword2()">
                        <i class="fas fa-eye-slash" id="2"></i></button></div></div>
                        <div class="camposForm"><button type="button" class="botonform" onClick="validarRegistrate()">SIGUIENTE</button></div>
                        <div class="camposFormulario"><span id="msj2" class="mensaje"></span></div>
                    </form>
            </article>

            <p class="aviso">El pago no se realizará en el sitio web, aquí solamente podrás seleccionar los productos que te interesan. <br> Le daremos seguimiento a tu pedido vía telefónica. <br> Horario de atención: Lunes a viernes de <span>8 am - 5 pm</span> </p>
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
                        <li><a href="index.php" target="_self">Inicio | </a></li>
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
url: "https://www.xapontic.org/",
title: "Xapontic: Login",
 description: "Xapontic, que quiere decir “nuestro jabón” en tseltal, es una marca de Productos de cuidado e higiene personal, Hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de su región",
media: "https://www.xapontic.org/images/facebook/xapontic_login_facebook.jpg"
 }
</script>

    </body>
</html>