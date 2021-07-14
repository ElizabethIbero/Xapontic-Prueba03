<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="author" content="Paulina Procel, Giovanni Lorenzo, Omar García, Vanessa Juárez">
        <meta name="description" content="Xapontic, somos una organización de mujeres tseltales que, a través de procesos económicos eficaces, fortalezca el sistema de medios de vida de sus familias, buscando la autonomía económica para la defensa del territorio, como parte de Yomol A’tel. ">
        <meta name="keywords" content="jabones orgánicos, jabones, jabones naturales, jabones de glicerina, jabones artesanales, jabones hechos a mano, jabón de glicerina, jabonería, menta, cacao, jabones xapontic, xapontic, jabones mexicanos, jabones mexico, méxico, chiapas, jabones de chiapas, empoderamiento de mujeres, mujeres tseltales, mujeres indígenas, ingredientes naturales">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="https://www.xapontic.org/quienes_somos.php" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Xapontic: Quiénes Somos" />
      <meta property="og:description" content="Xapontic, que quiere decir 'nuestro jabón' en tseltal, es una marca de productos de cuidado e higiene personal, hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de su región." />
      <meta property="og:image" content="https://www.xapontic.org/images/facebook/xapontic_quienes_somos_facebook.jpg"/>
        <title>Xapontic: Quiénes Somos</title>
        <link href="estilos.css" rel="stylesheet">
        <script type="text/javascript" src="scripts.js"></script>
        <script src="https://kit.fontawesome.com/5637dd924f.js" crossorigin="anonymous"></script>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
</head>
<body>
        <div>
        <header>
                <h1>Xapontic: Nuestro Jabón</h1>
                <nav><h2>Barra de navegación</h2>
                <div class="navMovil"> 
                    <div id="mySidenav" class="sidenav">
                        <ul>
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="quienes_somos.php" target="_self"><strong>¿Quiénes somos?</strong></a></li>
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
            <li><a href="quienes_somos.php" target="_self"><strong>¿Quiénes somos?</strong></a></li>
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
    <div class="somosinterna">
        <section class="quienesinterna">
            
            <div class="quienessomos"> 
              <h2 class="titulo">¿QUIÉNES SOMOS?</h2>
                <p>Somos un grupo de mujeres mexicanas <strong>tseltales</strong>, productoras artesanales, enfocadas al cuidado de la piel. 
                Incorporamos ingredientes naturales de la región, para ofrecerte productos sustentables que puedas incluir en tu ritual de belleza y al mismo tiempo abracen tu corazón. 
                Conformamos la cooperativa <strong>Junpajal Otanil</strong> <em>(Armonía del corazón)</em> originarias de las regiones: 
                <strong>Chalam Ch'en</strong>, <strong>Aurora</strong>, <strong>Yaxwinik</strong>, <strong>Santa Cruz</strong> y <strong>Tic'antel ha'</strong> en <strong>Chiapas</strong>, <strong>México</strong> y formamos parte del grupo de empresas de economía social y solidaria <strong>Yomol A'tel</strong>.

                </p>
                <figure>
                    <img src="imagenes/contenido/somos_equipo_mujeres_xapontic.png" alt="Mujeres indígenas Tseltales pertenecientes al equipo de trabajo de Xapontic">
                </figure>
              </div>
            <article class="somosmision">
                <h3 class="titulo">¿QUÉ SIGNIFICA XAPONTIC?</h3>
                <p><strong>Xapontic</strong> significa <em>“nuestro jabón”</em> en <strong>tseltal</strong>, somos una marca de productos de cuidado e higiene personal, hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de la región, como la miel de abeja y el café orgánico por mencionar algunos.
                  Actualmente, elaboramos jabones artesanales, con planes de ampliar nuestra línea de productos e incluir shampoo, velas, cremas, exfoliantes y otros productos que puedas incorporar en tu ritual de belleza y abracen tu corazón.
                </p>
                <figure>
                    <img src="imagenes/contenido/somos_mujer_xapontic_quienes.png" alt="Mujer indígena mostrando una barra de jabón Xapontic">
                </figure>
            </article>
            <article class="somosvision">
                <h3 class="subtitulo">MISIÓN</h3>
                <p>Ser una alternativa de consumo responsable a través de productos de cuidado e higiene personal elaborados artesanalmente, con ingredientes naturales de la región que pasan de generación en generación.
                </p>
                <h3 class="subtitulo">VISIÓN</h3>
                <p>Ser una línea competitiva en México de productos de cuidado e higiene personal de alta calidad, que represente un puente a una de las culturas indígenas de nuestro país y el empoderamiento de las mujeres.
                </p>
                <figure>
                    <img src="imagenes/contenido/somos_mujeres_xapontic_vision.png" alt="Mujeres indígenas pertenecientes a Xapontic">
                </figure>
            </article>
        </section>
        <section class="somosnosotras">
            <h2>Nosotras</h2>
                <article>
                <h3 class="subtitulo">NOSOTRAS</h3>
                    <p class="somosintro1">
                    Somos 37 mujeres originarias de las regiones: <strong>Chalam Ch'en</strong>, <strong>Aurora</strong>, <strong>Yaxwinik</strong>, <strong>Santa Cruz</strong> y <strong>Tic'antel ha'</strong> en <strong>Chiapas</strong>, <strong>México</strong>, 
                    que nos reunimos mensualmente para elaborar los jabones desde los laboratorios que se construyeron en las comunidades, para elaborarlos con todos los protocolos necesarios para compartir lo mejor. 
                    Luego, los productos son trasladados a la oficina de la coordinación en el municipio de <strong>Chilón</strong>, para ser comercializados por un equipo de ventas. 
La creación de una línea de productos cosméticos representa para nosotras un medio más para contribuir al proceso de agregación de valor de la miel y productos derivados de la colmena, apostando a diversificar los ingresos de las familias y permitiendo mayor control sobre los mismos.

                    </p>
                </article>
        </section>
        <section class="somosvalores">
            <h2>Valores</h2>
            <article>
                <h3 class="subtitulo">VALORES</h3>
            </article>
            <article>
                <h3>TRABAJO EN EQUIPO
                </h3>
            </article>
            <article>
                <h3>RESPETO
                </h3>
            </article>
            <article>
                <h3>EQUIDAD</h3>
            </article>
            <article>
                <h3>HONESTIDAD</h3>
            </article>
            <article>
                <h3>RESPONSABILIDAD</h3>
            </article>
            <article>
                <h3>SOSTENIBILIDAD</h3>
            </article>
            <article>
                <h3>TOLERANCIA</h3>
            </article>
            <article>
                <h3>COMPROMISO</h3>
            </article>
            <article>
                <h3>LEQUIL CUXLEJALIL
                <br>(buen vivir)
                </h3>
            </article>
        </section>
        <section class="somosequipo">
            <h2 class="subtitulo">EL EQUIPO</h2>
            <p>Estos productos son el fruto del trabajo y 
                empoderamiento de 37 mujeres indígenas 
                <strong>tseltales</strong> de la coperativa <strong>Jun Pajal Otanil</strong>, 
                originarias de: <strong>Cha'lam Ch'en, Aurora, Yaxwinic, Santa Cruz la Reforma y Tic'antelha'.</strong>
            </p>
            <figure>
                <img src="imagenes/contenido/somos_equipo_mujeres_xapontic.png" alt="Mujeres indígenas Tseltales pertenecientes al equipo de trabajo de Xapontic">
            </figure>
        </section>
        <section class="somoshistoria">
          <h2 class="subtitulo">HISTORIA</h2>
          <section id="timeline">
            <h2>HISTORIA</h2>
              <div class="tl-item">
              
                <div class="tl-bg" style="background-image: url('imagenes/decorativas/circulo.png')"></div>
              
                <div class="tl-year">
                  <p class="f2 heading--sanSerif">2010</p>
                </div>
          
                <div class="tl-content">
                  <h1>2010</h1>
                  <p>Se creó el proyecto <strong>Xapontic</strong></p>
                  <p>Se formó el grupo de mujeres que elaboran jabones de miel</p>
                  <p>Se puso el nombre <strong>Yip Antsetic</strong> <em>(Fuerza de mujeres)</em></p>
                  <p>Quedó la marca <strong>Xapontic</strong></p>
                </div>
          
              </div>
          
              <div class="tl-item">
              
                <div class="tl-bg" style="background-image: url(imagenes/decorativas/circulo.png)"></div>
              
                <div class="tl-year">
                  <p class="f2 heading--sanSerif">2017</p>
                </div>
          
                <div class="tl-content">
                  <h1 class="f3 text--accent ttu">2017</h1>
                  <p>Se hizo el diseño del empaque</p>
                  <p>Se mejoró la calidad de producto</p>
                  <p>Diversificación de aroma</p>
                  <p>Representantes en cada comunidad</p>
                  <p>Reglamento interno de <strong>Xapontic</strong></p>
                  <p>Plan de marca</p>
                </div>
          
              </div>
          
              <div class="tl-item">
              
                <div class="tl-bg" style="background-image: url(imagenes/decorativas/circulo.png)"></div>
              
                <div class="tl-year">
                  <p class="f2 heading--sanSerif">2018</p>
                </div>
          
                <div class="tl-content">
                  <h1 class="f3 text--accent ttu">2018</h1>
                  <p>Empezamos a trabajar con perfil de puesto</p>
                  <p>Estandarización de Calidad de Jabones</p>
                  <p>Se creó la cooperativa de <strong>Junpajal O´tanil</strong> <em>(Armonía del corazón)</em></p>
                  <p>Trámite del acta constitutiva</p>
                </div>
          
              </div>
          
              <div class="tl-item">
              
                <div class="tl-bg" style="background-image: url(imagenes/decorativas/circulo.png)"></div>
              
                <div class="tl-year">
                  <p class="f2 heading--sanSerif">2019</p>
                </div>
          
                <div class="tl-content">
                  <h1 class="f3 text--accent ttu">2019</h1>
                  <p>Diversificación de los 7 aromas de jabón</p>
                  <p>Se buscó una dirección de <strong>Xapontic</strong></p>
                  <p>Se hizo un equipo coordinado con el perfil de puesto</p>
                  <p>Empezó a trabajar con el plan de trabajo anual con objetivos y presupuestos</p>
                  <p>Sigue en trámite el acta constitutiva</p>
                  <p>Empezó a trabajar con plantas aromáticas para diversificar el producto</p>
                  <p>Se mejoró la calidad de jabones</p>
                  <p>Empezó a trabajar con bolsa artesanal</p>
                </div>
          
              </div>
              <div class="tl-item">
              
                  <div class="tl-bg" style="background-image: url(imagenes/decorativas/circulo.png)"></div>
                
                  <div class="tl-year">
                    <p class="f2 heading--sanSerif">2020</p>
                  </div>
            
                  <div class="tl-content">
                    <h1 class="f3 text--accent ttu">2020</h1>
                    <p>Diversificación de productos</p>
                    <p>Se hizo los laboratorios en tres comunidades</p>
                    <p>Se está haciendo extracción de esencia</p>
                    <p>Diversificación de aromas y productos</p>
                  </div>
            
                </div>
            </section>
          </section>
    </div>
    <footer>
      <h2>XAPONTIC <br> <span>nuestro jabón</span> </h2>
      <div class="vcard">
            <div class="tel"><a href="tel:+529196170172" target="_blank" title="tel:+52919617017">919 671 0172</a></div>
            <a class="email" href="mailto:contacto@batsilmaya.org?&amp;subject=Solicitud%20de%20información&amp;body=Hola%20estoy%20interesado/a%20en%20recibir%20m&aacute;s%20informaci&oacute;n%20de%20Xapontic<br>Nombre%20completo:%20<br>Tel&eacute;fono%20de%20contacto:%20<br>Servicio%20de%20inter&eacute;s:%20<br>Comentarios%20adicionales:%20" target="_blank" title="Xapontic: Contacto" title="Enviar Correo">contacto@batsilmaya.org</a>
          <div class="adr">
           <div class="street-address">Calle Allende #5 Barrio Centro, Chilón, Chiapas</div>
          </div>
         </div>
  <div class="mapadenav">
      <aside>
          <h2>Menú alterno</h2>
          <ul class="menualterno">
              <li><a href="index.php" target="_self"> Inicio |  </a></li>
              <li><a href="quienes_somos.php" target="_self"> <strong>¿Quiénes somos? | </strong></a></li>
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
url: "https://www.xapontic.org/quienes_somos.php",
title: "Xapontic: Quiénes Somos",
 description: "Xapontic, que quiere decir “nuestro jabón” en tseltal, es una marca de Productos de cuidado e higiene personal, Hechos a mano por mujeres tseltales, con ingredientes naturales endémicos de su región",
media: "https://www.xapontic.org/images/facebook/xapontic_quienes_somos_facebook.jpg"
 }
</script>

    
</body>
</html>