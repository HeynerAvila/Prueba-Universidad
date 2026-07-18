<?php

include("conexion.php");

$sql="SELECT * FROM productos";

$resultado=$conexion->query($sql);

?>

<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<title>Lista de Productos</title>

<link rel="stylesheet" href="estilos.css">

</head>

<body>

<div class="contenedor">

<h1>Productos Registrados</h1>

<table border="1" width="100%">

<tr>

<th>ID</th>

<th>Nombre</th>

<th>Categoría</th>

<th>Precio</th>

<th>Cantidad</th>

</tr>

<?php

while($fila=$resultado->fetch_assoc()){

echo "<tr>";

echo "<td>".$fila["id"]."</td>";

echo "<td>".$fila["nombre"]."</td>";

echo "<td>".$fila["categoria"]."</td>";

echo "<td>₡ ".$fila["precio"]."</td>";

echo "<td>".$fila["cantidad"]."</td>";

echo "</tr>";

}

?>

</table>

<br>

<a href="index.html">

<button>Regresar</button>

</a>

</div>

</body>

</html>