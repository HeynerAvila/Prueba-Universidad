<?php

postgresql://netlifydb_owner:npg_vmY1d5kRLIAM@ep-sparkling-waterfall-ajvd64qc.c-3.us-east-2.db.netlify.com/netlifydb?channel_binding=require&sslmode=require


$servidor = "ep-sparkling-waterfall-ajvd64qc.c-3.us-east-2.db.netlify.com";
$usuario = "netlifydb_owner";
$password = "npg_vmY1d5kRLIAM";
$bd = "netlifydb";

//postgresql://netlifydb_owner:npg_vmY1d5kRLIAM@ep-sparkling-waterfall-ajvd64qc.c-3.us-east-2.db.netlify.com/netlifydb?channel_binding=require&sslmode=require

$conexion = new PDO("pgsql:host=$servidor;dbname=$bd", $usuario, $password);

//${{ MySQL.MYSQL_URL }}
//$conexion = new mysqli($servidor, $usuario, $password, $bd);

if($conexion->connect_error){
    die("Error de conexión: ".$conexion->connect_error);
}

?>