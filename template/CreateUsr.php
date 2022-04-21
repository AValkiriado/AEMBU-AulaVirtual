<?php
    session_start();
//Si arriba un submit i no esta buit
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $pass = $_POST['pwd'];
    $pass_hash = password_hash($pass, CRYPT_SHA256);
    $nom = $_POST['name'];
    $cnom = $_POST['cname'];
    $tipoUsuari = $_POST['rol'];
    $loginName = $_POST['login'];

    $sql = "insert into Usuari (username,nom,cognoms,imatge,contrasenya,Tipus_id) values ('$loginName','$nom','$cnom','1.png','$pass_hash',$tipoUsuari)";

    if (mysqli_query($conectar, $sql)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'ha creat l\'usuari"); }</script>';
    }
    else {
        echo '<script type="text/javascript">window.onload = function () { alert("S\'ha produit un error"); }</script>';
    }

}
include 'head.php';
?>
<body>

	<div class="wrapper a">
        <?php
            include 'header.php';
            include 'aside.php';
        ?>
		<main>
<form method="post">

<div class="form-group">
    <label for="login">Nom d'usuari</label>
    <input type="text" class="form-control" id="login" name="login">

    <label for="name">Nom</label>
    <input type="text" class="form-control" id="name" name="name" required>

    <label for="cname">Cognoms</label>
    <input type="text" class="form-control" id="cname" name="cname" required>



    <label for="pwd">Contrasenya</label>
    <input type="password" class="form-control" id="pwd" name="pwd">


    <input type="radio" id="1" name="rol" value="1">
    <label for="1">Alumne</label><br>
    <input type="radio" id="2" name="rol" value="2">
    <label for="2">Professor</label><br>
    <input type="radio" id="3" name="rol" value="3">
    <label for="3">Administrador</label>

</div>

<input type="submit" name="submit" class="btn btn-primary" value="Guardar">
</form>
	</main>
	</div>

</body>

</html>
