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
$contingut = mysqli_query($conectar,"Update Classe set Contingut = '$contingut' where id = $id;");
header("Location: ../?espai=classe&id=$id");
?>
