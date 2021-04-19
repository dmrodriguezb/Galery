<?php
if (!isset($_POST["nombre"]) || !isset($_POST["NumTel"]) || !isset($_POST["email"])|| !isset($_POST["direccion"]) || !isset($_POST["estado"]) 
|| !isset($_POST["ciudad"]) || !isset($_POST["CodigoP"])) {
    exit("Faltan datos");
}
include_once "funciones.php";
guardarProducto($_POST["nombre"], $_POST["NumTel"], $_POST["email"],$_POST["direccion"],$_POST["estado"],$_POST["ciudad"],$_POST["CodigoP"]);
header("Location: ../welcome.php");
