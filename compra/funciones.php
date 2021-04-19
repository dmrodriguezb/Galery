<?php

function obtenerProductosEnCarrito()
{
    $bd = obtenerConexion();
    
    $sentencia = $bd->prepare("SELECT productos.id, productos.nombre, productos.precio
     FROM productos
     INNER JOIN carrito_usuarios
     ON productos.id = carrito_usuarios.id_producto
     WHERE carrito_usuarios.id_sesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll();
}



function guardarProducto($nombre,$NumTel,$email,$direccion,$estado,$ciudad,$CodigoP)
{
    $bd = obtenerConexion();
    $idSesion = session_id();
    $sentencia = $bd->prepare("UPDATE carrito_usuarios set nombre=?,NumTel=?,email=?,direccion=?,estado=?,ciudad=?,CodigoP=?
     WHERE id_sesion = ?");
    return $sentencia->execute([$nombre,$NumTel,$email, $direccion,$estado,$ciudad,$CodigoP,$idSesion]);

}


function quitarProductoDelCarrito($idProducto)
{
    $bd = obtenerConexion();
    
    $idSesion = session_id();
    $sentencia = $bd->prepare("DELETE FROM carrito_usuarios WHERE id_sesion = ? AND id_producto = ?");
    return $sentencia->execute([$idSesion, $idProducto]);
}


function productoYaEstaEnCarrito($idProducto)
{
    $ids = obtenerIdsDeProductosEnCarrito();
    foreach ($ids as $id) {
        if ($id == $idProducto) return true;
    }
    return false;
}

function obtenerIdsDeProductosEnCarrito()
{
    $bd = obtenerConexion();
    
    $sentencia = $bd->prepare("SELECT id_producto FROM carrito_usuarios WHERE id_sesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll(PDO::FETCH_COLUMN);
}

function agregarProductoAlCarrito($idProducto)
{
    // Ligar el id del producto con el usuario a través de la sesión
    $bd = obtenerConexion();
    $idSesion = session_id();
    $sentencia = $bd->prepare("INSERT INTO carrito_usuarios(id_sesion, id_producto) VALUES (?, ?)");
    return $sentencia->execute([$idSesion, $idProducto]);
}


function obtenerConexion()
{
    $password = "";
    $user =  "root";
    $dbName = "galery";
  $server="localhost";
  //$password = "?qt6k4jBkSeeSYMt";
  //$user =  "id16405007_dulnan";
  //$dbName = "id16405007_esquema";
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;

  
 
}
?>
