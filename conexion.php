<?php

$servidor = "@mysql.railway.internal:3306";
$usuario = "root";
$password = "VGFRFUgEYIAsnTvUTDIppxKtLIDoJMmK";
$bd = "railway";

//mysql://root:VGFRFUgEYIAsnTvUTDIppxKtLIDoJMmK@mysql.railway.internal:3306/railway

//${{ MySQL.MYSQL_URL }}
$conexion = new mysqli($servidor, $usuario, $password, $bd);

if($conexion->connect_error){
    die("Error de conexión: ".$conexion->connect_error);
}

?>