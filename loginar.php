<?php
 //Base de dades
include 'config.php';

$conectar = mysqli_connect($host,$user,$clave,$db);
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

else{
    if (! empty($_POST["entrar"])) {
    session_start();
    $username = $_POST['username'];
    $clau = $_POST['password'];


    $consulta = mysqli_query($conectar,"SELECT * from Usuari where username = '$username'");
    $array = mysqli_fetch_assoc($consulta);


if (password_verify($clau, $array['contrasenya']))
  {
    $_SESSION['username'] = $username;
    $_SESSION['tipo'] = $array['Tipus_id'];
    header("location: /index.php?espai=home");
  }
  else{
     header("location: /index.php?espai=errorLogin");
  }


    }
}


?>
