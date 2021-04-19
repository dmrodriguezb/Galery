<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {
?>
<br><br>
<br><br>
<br><br>
<div align="center">
    <ul class="contacts-modern-list">
    <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Todavía no hay productos
                </h1>
                <h2 class="subtitle">
                    Visita la tienda para agregar productos a tu carrito
                </h2>
                <a href="../welcome.php" class="btn btn-primary ">Ver Tienda</a>
            </div>
                </ul>
</div>
<?php } else { ?>
    <div class="columns">
        <div class="column">
            <br><br><br>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                    <th></th><th></th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th></th>  <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precio;
                    ?>
                        <tr>
                        <td></td><td></td>
                            <td><?php echo $producto->nombre ?></td>
                            <td>$<?php echo number_format($producto->precio, 2) ?></td>
                            <td>
                                <form action="eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="btn btn-primary btn-block">Eliminar Articulo
                                        <i class="fa fa-trash-o">  </i>
                                    </button> <td></td>
                                </form>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <br><br>
                    <tr>
                        
                        <td colspan="3" class="is-size-4 has-text-right">
                        <br><strong>Total</strong></td>
                        <td colspan="3" class="is-size-4">
                        <br>$<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <a href="terminar_compra.php" href="agregar_producto.php" class="btn btn-block btn-primary"><i class="fa fa-check"></i>&nbsp;Procesar compra</a>
        </div>
    </div>
<?php } ?>
<?php include_once "pie.php" ?>