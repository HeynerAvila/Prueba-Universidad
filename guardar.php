<?php

include("conexion.php");

$nombre = $_POST["nombre"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

$sql = "INSERT INTO productos(nombre,categoria,precio,cantidad)
VALUES('$nombre','$categoria','$precio','$cantidad')";

if($conexion->query($sql)==TRUE){

echo "<h2>Producto registrado correctamente.</h2>";

echo "<a href='index.html'>Registrar otro producto</a>";

}else{

echo "Error: ".$conexion->error;

}

$conexion->close();

?>