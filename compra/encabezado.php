
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Gallery</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300%7CQuestrial">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300%7CQuestrial">
    <script src="../js/popper.min.js"></script>
        <script src="../js/jquery-3.4.1.min.js"></script>
</head>

<body>

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
              <div class="container">
                <div class="row align-items-stretch justify-content-between">
                    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
                  
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                  <div class="rd-navbar-brand"><a class="brand" href="../welcome.php">
                                    <img class="brand-logo-desktop" src="../images/logo-default-384x188.png" alt="" width="192" height="104"/>
                                    <img class="brand-logo-mobile" src="../images/logo-default-384x130.png" alt="" width="160" height="35"/></a>


                                          

                                </li>
                            
                     <div class="navbar-end">
                <div class="navbar-item">
                        <a class="button button-default wow fadeInUp" href="ver_carrito.php">

                            Ver Carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?><img class=" dropdown-toggle img-fluid brand-logo-desktop" src="../images/cart.png"/>
                        </a>
                        </ul>
                </div>
            </div>          
                        <div class="rd-navbar-nav-wrap">
                    
                          <div class="rd-navbar-nav-container">
                            <!-- RD Navbar Nav-->
                            
                            <ul class="rd-navbar-nav">
                           
                              <li class="rd-nav-item "><a class="rd-nav-link" href="../welcome.php">Inicio</a>
                              </li>
                              <li class="rd-nav-item"><a class="rd-nav-link" href="../CategoriaEsculturas.html">Esculturas</a>
                              </li>
                                 <ul>
                                  <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatEsculturasAbs.html">Abstractas</a>
                                     </li>
                                     <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatEsculturasBus.html">Busto</a>
                                     </li>
                                     <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatEsculturasTor.html">Torso</a>
                                     </li>
                                     <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatEsculturasCub.html">Cubismo</a>
                                     </li>
                                     <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatEsculturasOtro.html">Otros</a>
                                     </li>
                                     <li class="rd-nav-item"><a class="rd-nav-link" href="../CategoriaPinturas.html">Pinturas</a>
                                     </li>
                                        <ul>
                                         <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatPinturasAbst.html">Abstractas</a>
                                            </li>
                                            <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatPinturasRea.html">Realismo</a>
                                            </li>
                                            <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatPinturasSub.html">Subrealismo</a>
                                            </li>
                                            <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatPinturasHip.html">Hiperrealismo</a>
                                            </li>
                                            <li class="rd-nav-item2"><a class="rd-nav-link2" href="../subCatPinturasOtros.html">Otros</a>
                                            </li>
                              <li class="rd-nav-item"><a class="rd-nav-link" href="../contacts.html">Contactamos</a>
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
              </nav>
            </div>
        </div>
              </div>
            </div>
          </nav>
        </div>
      </header>  
   

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">