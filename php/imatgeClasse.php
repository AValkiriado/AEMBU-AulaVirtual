<?php

$imatge = $_POST['imatge'];
$id = $_POST['id'];
$regex = '/[0-9]+\\.[a-zA-Z]+/i';

$id = trim($id);
$id = stripslashes($id);
$id = htmlspecialchars($id);

if (preg_match($regex, $imatge)) {
    include '../config.php';

    $conectar = mysqli_connect($host,$user,$clave,$db);
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    $resultat = mysqli_query($conectar,"Update Classe set imatge = '$imatge' where id = $id;");
    echo "Update Classe set imatge = '$imatge' where id = $id;";
    // echo $imatge;
    // echo $id;
}
else{
 echo "error";
}
?>
