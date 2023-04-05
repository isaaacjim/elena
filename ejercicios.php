<?php

function abrirBase(){

$hostname = "localhost";
$user = "root";
$password = "Abielero12@";
$db = "alumnos_practicas";

$connection = mysqli_connect($hostname, $user, $password);

mysqli_select_db($connection, $db);

return $connection;
}

function cerrarBase($connection) {
    mysqli_close($connection);
}

function extraerDatos($connection){
$result = mysqli_query($connection, "SELECT nombre FROM alumnos");

//var_dump($result);
    
$extraido = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($extraido);
    
}

$connection = abrirBase();
extraerDatos($connection);
cerrarBase($connection);

?>