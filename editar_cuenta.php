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
    <?php
if (isset($_SESSION["administrador"])){
?>
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
                            <li><a href="cuenta.php" target="_self"><strong>Mi cuenta</strong></a></li>
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
                    <li><a href="lougoutUsuario.php" target="_self">Cerrar sesión</a></li>
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
            include "
            conexion.php";
            ?>
            <section class="cuenta_editar">
                <h2 class="titulo">MI CUENTA</h2>
                <h3 class="subtitulo">Editar cuenta</h3>
                <?php 
                if (isset($_REQUEST["id"])){
                $idCliente = $_SESSION['idCliente'];
                include "conexion.php";
                $sql = "select * from 03_clientes where idCliente = ".$idCliente;
                $rs = ejecutar($sql);
                $dato = mysqli_fetch_array($rs);
                ?>
                <form class="ccform" action="editar_cuenta_xt.php" method="post" id="f3">
                        <div class="fieldset3">
                          <legend class="legend">Datos de usuario</legend>   
                          <input type="hidden" name="idCliente" value="<?php echo $idCliente; ?>" />
                          <div class="camposForm">Nombre* <input type="text" placeholder="Nombre" name="nombreCliente" class="campo" id="z1" value="<?php echo $dato["nombreCliente"];?>"/></div>      
                          <div class="camposForm">Apellidos* <input type="text" placeholder="Apellidos" name="apellido" class="campo" id="z2" value="<?php echo $dato["apellido"];?>"/></div>      
                          <div class="camposForm">Email <input type="text" placeholder="Email" name="email" class="campo" value="<?php echo $dato["email"];?>"/></div>  
                        <div class="camposForm">Nombre de usuario* <input type="text" placeholder="Nombre de usuario" name="usuario" class="campo" id="z3" value="<?php echo $dato["usuario"];?>"/></div>      
                        <div class="camposForm">Teléfono* <input type="text" placeholder="Teléfono" name="telefono" class="campo" id="z4" value="<?php echo $dato["telefono"];?>"/></div>
                        </div>

                        <div class="fieldset">
                          <legend class="legend">Tu dirección de envío</legend>
                          <div class="camposForm">Calle* <input type="text" placeholder="Calle" name="calle" class="campo" id="z5" value="<?php echo $dato["calle"];?>"/></div>      
                          <div class="camposForm">No. interior* <input type="text" placeholder="No. interior" name="numInterior" class="campo" id="z6" value="<?php echo $dato["numInterior"];?>"/></div>      
                          <div class="camposForm">No. exterior* <input type="text" placeholder="No. exterior" name="numExterior" class="campo" id="z7" value="<?php echo $dato["numExterior"];?>"/></div>
                          <div class="camposForm">Ciudad* <input type="text" placeholder="Ciudad" name="ciudad" class="campo" id="z8" value="<?php echo $dato["ciudad"];?>"/></div>      
                          <div class="camposForm">Colonia / Delegación* <input type="text" placeholder="Colonia / Delegación" name="colonia" class="campo" id="z9" value="<?php echo $dato["colonia"];?>"/></div>      
                          <div class="camposForm">Estado* <input type="text" placeholder="Estado" name="estado" class="campo" id="z10" value="<?php echo $dato["estado"];?>"/></div>   
                          <div class="camposForm">Código Postal* <input type="text" placeholder="Código Postal" name="codPostal" class="campo" id="z11" value="<?php echo $dato["codPostal"];?>"/></div>   
                          <div class="camposForm">Especificaciones de su domicilio <textarea name="esp" placeholder="Especificaciones de su domicilio. Ej. casa blanca, puerta café" rows="5" cols="40" class="campo"><?php echo $dato["esp"];?></textarea></div>
                        </div>

                        <div class="camposForm">
                        <button type="button" class="botonform" onClick="validarEdicion()">GUARDAR</button>
                        <button type="button" class="botonform" onClick="cancelarEdicion()">CANCELAR</button>
                        </div>
                        <div class="camposFormulario"><span id="msjedit" class="mensaje"></span></div>
                      </form>

            </section>

            <?php
}else{
    echo "<script language='javascript'>";
    echo "window.location.assign('cuenta.php');";
    echo "</script>";
}
?>
            <?php
}else{
    echo '<script language="javascript">';
    echo 'window.location.assign("login.php");';
    echo '</script>';
}
?>

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