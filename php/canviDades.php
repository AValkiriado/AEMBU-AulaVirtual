<?php
$nom = $_POST['nom'];
$cognom = $_POST['cognom'];
$id = $_POST['id'];

$nom = trim($nom);
$nom = stripslashes($nom);
$nom = htmlspecialchars($nom);

$cognom = trim($cognom);
$cognom = stripslashes($cognom);
$cognom = htmlspecialchars($cognom);

$id = trim($id);
$id = stripslashes($id);
$id = htmlspecialchars($id);


include '../config.php';

$conectar = mysqli_connect($host,$user,$clave,$db);
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
$resultat = mysqli_query($conectar,"Update Usuari set nom = '$nom', cognoms = '$cognom' where username = '$id';");
header('Location: ../');
?>
