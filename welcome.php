<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html >
<html class="wide wow-animation" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
    <!--AGREGADO DE GALERIA-->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300%7CQuestrial">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  <!-- FIN AGREGADO DE GALERIA-->

    <style type="text/css">
        body{ 

         }
    </style>
</head>
<body>
    <!-- Se agregara en el menu-->
   <!--
    <p>
        <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
        <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>
    </p>
    -->
 <!--Fin Se agregara en el menu-->

 <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-spinner"><span class="cssload-cube cssload-cube0"></span><span class="cssload-cube cssload-cube1"></span><span class="cssload-cube cssload-cube2"></span><span class="cssload-cube cssload-cube3"></span><span class="cssload-cube cssload-cube4"></span><span class="cssload-cube cssload-cube5"></span><span class="cssload-cube cssload-cube6"></span><span class="cssload-cube cssload-cube7"></span><span class="cssload-cube cssload-cube8"></span><span class="cssload-cube cssload-cube9"></span><span class="cssload-cube cssload-cube10"></span><span class="cssload-cube cssload-cube11"></span><span class="cssload-cube cssload-cube12"></span><span class="cssload-cube cssload-cube13"></span><span class="cssload-cube cssload-cube14"></span><span class="cssload-cube cssload-cube15"></span>
        </div>
        <h2 class="preloader-title">The Gallery</h2>
      </div>
    </div>
    <div class="page"><a class="section section-banner d-none d-xl-flex" ></a>
      <!-- Page Header-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap position-relative">
          <nav class="rd-navbar" data-layout="rd-navbar-sidebar" data-device-layout="rd-navbar-sidebar" data-sm-layout="rd-navbar-sidebar" data-sm-device-layout="rd-navbar-sidebar" data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-sidebar" data-lg-layout="rd-navbar-sidebar" data-lg-device-layout="rd-navbar-sidebar" data-xl-layout="rd-navbar-sidebar" data-xl-device-layout="rd-navbar-sidebar" data-xxl-layout="rd-navbar-sidebar" data-xxl-device-layout="rd-navbar-sidebar" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-auto-height="false" data-sm-auto-height="false" data-md-auto-height="false" data-lg-auto-height="false" data-xl-auto-height="false" data-xxl-auto-height="false">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="CategoriaEsculturas.html"><img class="brand-logo-desktop" src="images/logo-default-384x188.png" alt="" width="192" height="94"/><img class="brand-logo-mobile" src="logo-default-384x130.png" alt="" width="192" height="65"/></a>
                  
                  </div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-container">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" href="welcome.php">LOGIN</a>
                          </li>
                        <li><a style="color: white;font-size: 13px;" href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a></li>
                        <li><a style="color: white;font-size: 13px;" href="logout.php" class="btn btn-danger">Cierra la sesión</a></li>
                    
                          <li class="rd-nav-item active"><a class="rd-nav-link" href="welcome.html">Home</a>
                          </li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="CategoriaEsculturas.html">Esculturas</a>
                          </li>
                             <ul>
                              <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatEsculturasAbs.html">Abstractas</a>
                                 </li>
                                 <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatEsculturasBus.html">Busto</a>
                                 </li>
                                 <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatEsculturasTor.html">Torso</a>
                                 </li>
                                 <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatEsculturasCub.html">Cubismo</a>
                                 </li>
                                 <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatEsculturasOtro.html">Otros</a>
                                 </li>
                                 <li class="rd-nav-item"><a class="rd-nav-link" href="CategoriaPinturas.html">Pinturas</a>
                                 </li>
                                    <ul>
                                     <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatPinturasAbst.html">Abstractas</a>
                                        </li>
                                        <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatPinturasRea.html">Realismo</a>
                                        </li>
                                        <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatPinturasSub.html">Subrealismo</a>
                                        </li>
                                        <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatPinturasHip.html">Hiperrealismo</a>
                                        </li>
                                        <li class="rd-nav-item2"><a class="rd-nav-link2" href="subCatPinturasOtros.html">Otros</a>
                                        </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contactamos</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Mapa del Sitio</a>
                      </li>
                    </ul>
                    <ul class="contacts-classic">
                      <li>
                        <div class="contacts-classic-title">Conocenos:</div>
                        <ul class="list-inline list-social list-inline-sm">
                          <li><a class="icon fa fa-linkedin" href="#"></a></li>
                          <li><a class="icon fa fa-twitter" href="#"></a></li>
                          <li><a class="icon fa fa-facebook" href="#"></a></li>
                          <li><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>       
      <!-- The Gallery-->
       <section class="section section-full section-inset-1 bg-default text-center bg-image background-position-1" id="home" style="background-image: url(images/es-comprar-escultura-realista-3.jpg)">
        <div class="container">
        
            <div class="title-style-2-wrap">
              <div class="oh-desktop wow slideInRight">
              <h5 class="title-style-2 wow slideInLeft">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a nuestro sitio.</h5><br>
                <h5 class="title-style-2 wow slideInLeft">Descubre el universo de nuestros artistas</h5>
              </div>
            </div><a class="button button-default wow fadeInUp" href="abouts.html">More about us</a>
          </div>
        </section>
        <!-- About Us-->
        <section class="section section-full section-xxl bg-default" id="about">
          <div class="container">
            <div class="row row-30 justify-content-center">
              <div class="col-sm-9 col-md-5 cube-classic-wrap">
                <div class="subtitle-classic wow fadeInLeft">Welcome to our website!</div>
                <h2 class="wow fadeInLeft">Descubre el <br class="d-none d-md-block"><span class="text-primary">mundo</span> en <br class="d-none d-md-block">pintura
                </h2>
                <div class="cube-classic cube-classic-1"><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span>
                </div>
              </div>
              <div class="col-md-7 col-lg-6 col-xl-5">
                <p class="wow fadeInRight">Somos una galería virtual de obras Gráficas y Vivas en la que unimos nuestros esfuerzos para que los nuevos coleccionistas puedan formar parte del mundo del arte. Apasionados por la exploración, la creatividad, la experimentación, el arte y la estética. </p>
                <p class="wow fadeInRight">Buscamos generar un espacio en el que el talento emergente pueda colaborar, indagar y compartir su trabajo.</p>
                <a class="wow fadeInRight button button-default" href="CategoriaEsculturas.html" >Esculturas</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="wow fadeInRight button button-default" href="CategoriaPinturas.html">Pinturas</a>
              </div>
            </div>
          </div>
        </section>
    
      <!-- Selected works-->
      <section class="section section-full section-md bg-gray-100 section-background-custom" id="works">
        <div class="container">
          <div class="row row-30 justify-content-center justify-content-lg-end align-items-md-center">
            <div class="col-sm-8 col-md-6 col-lg-5 cube-classic-wrap">
              <div class="subtitle-classic wow fadeInLeft">Selected works</div>
              <h2 class="wow fadeInLeft" data-wow-delay=".1s">Un espacio distinto <br class="d-none d-md-block">tu espacio<br class="d-none d-md-block">Arte que enamora
              </h2>
              <p class="wow fadeInLeft">La regularidad, el orden y el deseo de perfección destruyen el alma. La irregularidad es la base de todo arte.</p>
              <div class="cube-classic cube-classic-2"><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span><span class="cube-classic-item"></span>
              </div>
            </div>
            <div class="col-sm-8 col-md-6 wow blurIn">
              <div class="inset-xl-left-25">
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-style-1" data-loop="true" data-items="1" data-nav="true"><img src="images/destino-min.png" alt="" width="618" height="614"/><img src="images/car-min.png" alt="" width="618" height="614"/><img src="images/cielo-min.png" alt="" width="618" height="614"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="background-custom-1 bg-default"></div>
      </section>
     <!-- Portfolio-->
     <section class="section section-full section-xl bg-default text-md-center" id="projects">
        <div class="container">
          <h2><span class="d-inline-block wow fadeInLeft">Nuestros</span> <span class="text-primary d-inline-block wow fadeInRight">Productos</span>
          </h2>
          <div class="row row-lg row-30">
            <div class="col-sm-6 col-md-4 wow blurIn" data-wow-delay=".2s">
              <article class="project-classic box-md"><img src="pinturas\realismo\1.png" alt="" width="370" height="262"/>
                <div class="project-classic-caption">
                  <div>
                    <h4 class="project-classic-title"><a href="#">Las espigadoras</a></h4>
                    <div class="project-classic-tag">
                  <a class="button button-default wow fadeInUp" href="compra/CompraPinEspigadoras.php">Comprar Ahora</a>
                </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 wow blurIn" data-wow-delay=".1s">
              <article class="project-classic box-md"><img src="pinturas/hiperrealismo/chica (1).jpg" alt="" width="370" height="262"/>
                <div class="project-classic-caption">
                  <div>
                    <h4 class="project-classic-title"><a href="#">Joven Venecian</a></h4>
                    <div class="project-classic-tag">
                  <a class="button button-default wow fadeInUp" href="compra/CompraPinJoven.php">Comprar Ahora</a>
                </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 wow blurIn">
              <article class="project-classic box-md"><img src="pinturas\abstractas\5.png" alt="" width="370" height="262"/>
                <div class="project-classic-caption">
                  <div>
                    <h4 class="project-classic-title"><a href="#">Naufragio</a></h4>
                    <div class="project-classic-tag">
                  <a class="button button-default wow fadeInUp" href="compra/CompraPinNaufragio.php">Comprar Ahora</a>
                </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 wow blurIn">
              <article class="project-classic box-md"><img src="esculturas\Abstractas\escultura-pensador-de-rodin-espacio-rojo-fuego (2).jpg" alt="" width="370" height="262"/>
                <div class="project-classic-caption">
                  <div>
                    <h4 class="project-classic-title"><a href="#">Fuego Rojo</a></h4>
                    <div class="project-classic-tag">
                  <a class="button button-default wow fadeInUp" href="compra/CompraFuego.php">Comprar Ahora</a>
                </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 wow blurIn" data-wow-delay=".1s">
              <article class="project-classic box-md"><img src="esculturas\Busto\escultura-esencia-de-juventud-rojo-fuego22.jpg" alt="" width="370" height="262"/>
                <div class="project-classic-caption">
                  <div>
                    <h4 class="project-classic-title"><a href="#">Esencia de Juventud</a></h4>
                    <div class="project-classic-tag">
                  <a class="button button-default wow fadeInUp" href="compra/CompraEsencia.php">Comprar Ahora</a>
                </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 wow blurIn" data-wow-delay=".2s">
              <article class="project-classic box-md"><img src="esculturas\Busto\escultura-dulce-inocencia-bronce (2).jpg" alt="" width="370" height="262"/>
                <div class="project-classic-caption">
                  <div>
                    <h4 class="project-classic-title"><a href="#">Dulce Inocencia</a></h4>
                    <div class="project-classic-tag">
                  <a class="button button-default wow fadeInUp" href="compra/CompraInocencia.php">Comprar Ahora</a>
                </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <!-- Page Footer-->
      <footer class="section footer-classic section-full section-full-1 section-sm section-inset-2 bg-gray-3 context-dark text-md-center" id="contacts">
        
        <div class="container">
          <div class="footer-classic-list-social wow fadeInUp">
            <ul class="list-inline list-social list-inline-sm">
              <li><a class="icon fa fa-linkedin" href="#"></a></li>
              <li><a class="icon fa fa-twitter" href="#"></a></li>
              <li><a class="icon fa fa-facebook" href="#"></a></li>
              <li><a class="icon fa fa-instagram" href="#"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
     
</body>
</html>