<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";


function obtenerProductos()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT id, nombre, precio FROM productos where id=2");
    return $sentencia->fetchAll();
}
$productos = obtenerProductos();

?>
<div class="columns">
    <div class="column">
       <br><br>
       <br><br>
       <br>
    </div>
</div>
<?php foreach ($productos as $producto) { ?>

    <div class="site-section site-section-sm "  >
        <div class="container">
          <div class="row">
            <div class="col-lg-12" align="center">
              <div>
            

                  <div class="card mb-4 shadow-sm">
                   
                    <div class="card-body" >
                        <img src="../esculturas/Busto/escultura-calma-y-silencio-en-bronce-azul (1).jpg" class="card-img-top">
                        <br>
                        <h4 >Calma y Silencio</h4>
                        <p>
                        <h1 class="card-title wow pricing-card-title precio ">$<span class=""><?php echo number_format($producto->precio, 2) ?></span> MX</h1>

                      </div>
                      <div class="bg-white property-body border-bottom border-left border-right">
               
                        <div class="row mb-5">
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Altura
                            </span>
                            <strong class="d-block">40 cm</strong>
                          </div>
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Longitud</span>
                            <strong class="d-block">16 cm</strong>
                          </div>
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Anchura</span>
                            <strong class="d-block">15 cm</strong>
                          </div>
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Peso</span>
                            <strong class="d-block">4.4 kg</strong>
                          </div>
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Acabado</span>
                            <strong class="d-block">Bronce Oscuro</strong>
                          </div>
                        </div>
                        <h2 class="h4 text-black">Mas Informaci??n</h2>
                        <p>La escultura est?? realizada con una capa de bronce sobre fundici??n en fr??o de cobre con base de grafito y calcita con terminaciones pulidas.</p>
                        <br>
                        <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                        <h5 class="d-flex justify-content-center mb-3">El articulo se ha a??adido al carrito</h5>
                    <?php } else { ?>
                        <form action="agregar_al_carrito_calma.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button class="btn btn-block btn-primary"> Agregar al carrito</button>
                        </form>
                    <?php } ?>
                    </div>
                </div>

                <div class="row no-gutters mt-5">
                  <div class="col-12">
                    <h2 class="h4 text-black mb-3">Galeria</h2>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <a href="../esculturas/Busto/escultura-calma-y-silencio-en-bronce-azul (1).jpg" class="image-popup gal-item"><img src="../esculturas/Busto/escultura-calma-y-silencio-en-bronce-azul (1).jpg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <a href="../esculturas/Busto/escultura-calma-y-silencio-en-bronce-azul (2).jpg" class="image-popup gal-item"><img src="../esculturas/Busto/escultura-calma-y-silencio-en-bronce-azul (2).jpg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <a href="../esculturas/Busto/escultura-calma-y-silencio-en-bronce-azul (3).jpg" class="image-popup gal-item"><img src="../esculturas/Busto/escultura-calma-y-silencio-en-bronce-azul (3).jpg" alt="Image" class="img-fluid"></a>
                  </div>
                </div>
                <br>
              </div>
            </div>
            <br>
            <br>
        
          </div>
        </div>
      </div>






<?php } ?>
<?php include_once "pie.php" ?>