<?php

// //comencem la sessio
session_start();

$id = $_POST['id'];
$contingut = $_POST['myDoc'];

//Base de dades
include '../config.php';
$conectar = mysqli_connect($host,$user,$clave,$db);
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
$contingut = mysqli_query($conectar,"Update Esdeveniment set Descripcio = '$contingut' where id = $id;");
header("Location: ../?espai=admin&admin=editarEsdeveniment&id=$id");
?>