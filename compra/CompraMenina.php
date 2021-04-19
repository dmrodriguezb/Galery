<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";


function obtenerProductos()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT id, nombre, precio FROM productos where id=13");
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
                    <img src="../esculturas/Cubismo/escultura-menina-aire-y-madera.jpg" class="card-img-top">
                        <br>
                        <h4 >Menina Aire y Madera</h4>
                        <p>
                        <h1 class="card-title wow pricing-card-title precio ">$<span class=""><?php echo number_format($producto->precio, 2) ?></span> MX</h1>

                      </div>
                      <div class="bg-white property-body border-bottom border-left border-right">
               
                      <div class="row mb-5">
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Altura
                            </span>
                            <strong class="d-block">34.5 cm</strong>
                          </div>
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Longitud</span>
                            <strong class="d-block">17.5 cm</strong>
                          </div>
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Anchura</span>
                            <strong class="d-block">21.5 cm</strong>
                          </div>
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Peso</span>
                            <strong class="d-block">5.5 kg</strong>
                          </div>
                          <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Acabado</span>
                            <strong class="d-block">Madera</strong>
                          </div>
                        </div>
                        <h2 class="h4 text-black">Mas Información</h2>
                        <p>La escultura está realizada con madera con un estilo singular la madera es de las mejores que se puede conseguir en rusia</p>
                        <br>

                        <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                        <h5 class="d-flex justify-content-center mb-3">El articulo se ha añadido al carrito</h5>
                    <?php } else { ?>
                        <form action="agregar_al_carrito_Menina.php" method="post">
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
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <a href="../esculturas/Cubismo/escultura-menina-aire-y-madera (1).jpg" class="image-popup gal-item"><img src="../esculturas/Cubismo/escultura-menina-aire-y-madera (1).jpg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <a href="../esculturas/Cubismo/escultura-menina-aire-y-madera.jpg" class="image-popup gal-item"><img src="../esculturas/Cubismo/escultura-menina-aire-y-madera.jpg" alt="Image" class="img-fluid"></a>
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