
<?php
# Es responsabilidad del programador hacer algo con los productos
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
//var_dump($productos);


 include_once "encabezado.php" ?>
<div class="container">
            <div class="row mt-3">
                <div class="col">
                <br><br>
                    <h2 class="d-flex justify-content-center mb-3">Realizar Compra</h2>
        <form action="guardar_producto.php" method="post">
        <div class="field">
             <label for="nombre" class="col-12 col-md-2 col-form-label h2">Nombre:</label>
            <div class="control col-12 col-md-10">
               <input  id="nombre" class="input" type="text" name="nombre" placeholder="Ingresa nombre completo"  cols="80"
                     pattern="^[A-ZÑa-zñáéíóúÁÉÍÓÚ]+(\s[A-ZÑa-zñáéíóúÁÉÍÓÚ]+)*$" data-bv-regexp-message="Formato no valido" required>
             </div>
          </div>
          <div class="field">
             <label for="NumTel" class="col-12 col-form-label h2">Numero de Teléfono:</label>
            <div class="control col-12 col-md-10">
           <input type="text" id="NumTel" class="input" name="NumTel" cols="80" placeholder="Numero de Teléfono" pattern="^[0-9]+$" data-bv-regexp-message="Formato no valido" required>
            </div>
          </div>
          <div class="field">
             <label for="email" class="col-12 col-md-2 col-form-label h2">Correo Electronico:</label>
            <div class="control col-12 col-md-10">
               <input  id="email" class="input" type="text" name="email" placeholder="Ingresa tu Correo Electronico"  cols="80"
               pattern="[A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+([.][A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+)*@[A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+([.][A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_+)*[.][A-ZÑa-zñáéíóúÁÉÍÓÚ]{1,5}" data-bv-regexp-message="Formato no valido" required>
             </div>
          </div>
          <div class="field">
            <label for="direccion" class="col-12 col-md-2 col-form-label h2">Direccion:</label>
             <div class="control col-12 col-md-10">
             <input type="text" class="input" id="direccion" placeholder="Direccion" name="direccion" cols="80"
                             pattern="^[A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+(\s[A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+)*$" data-bv-regexp-message="Formato no valido" required>           
            </div>
         </div>
          <div class="field">
            <label for="estado" class="col-12 col-md-2 col-form-label h2">Estado:</label>
             <div class="control col-12 col-md-10">
             <input type="text" class="input"id="estado" placeholder="Estado" name="estado" cols="80"
                               pattern="^[A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+(\s[A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+)*$" data-bv-regexp-message="Formato no valido" required>       
             </div>
         </div>
         <div class="field">
            <label for="ciudad" class="col-12 col-md-2 col-form-label h2">Ciudad:</label>
             <div class="control col-12 col-md-10">
             <input type="text" class="input"id="ciudad" placeholder="Ciudad" name="ciudad" cols="80"
                                 pattern="^[A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+(\s[A-ZÑa-zñáéíóúÁÉÍÓÚ0-9_]+)*$" data-bv-regexp-message="Formato no valido" required>       
            </div>
         </div>
         <div class="field">
            <label for="CodigoP" class="col-12 col-md-2 col-form-label h2">Codigo Postal:</label>
            <div class="control col-12 col-md-10">
             <input type="text" class="input" id="CodigoP" name="CodigoP" cols="80" placeholder="Codigo Postal"
              pattern="^[0-9]+$" data-bv-regexp-message="Formato no valido" required>
            </div>
         </div>
            <div class="row  justify-content-between">
                <div class="col-xs-12 col-md-4">
                <button href="../welcome.php" class="btn btn-primary ">Seguir comprando</button>
                </div>   
                <div class="col-xs-12 col-md-4">
                      <button class="btn btn-primary ">Realizar compra</button>
                 </div>
                </div>
            </div>

        </form>
    </div>
</div>
</div>
<?php include_once "pie.php" ?>