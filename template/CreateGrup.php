<?php
    session_start();
//Si arriba un submit i no esta buit
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $loginName = $_POST['login'];

    $sql = "insert into Grup (nom) values ('$loginName');";
    if (mysqli_query($conectar, $sql)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'ha creat el grup"); }</script>';
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
<br><br>
<h1 class="main-title">Crear Grup</h1>
<div class="form1-group">

    <form method="post">
    <label for="login">Nom del Grup</label>
    <input type="text" class="form-control" id="login" name="login">

</div><br>
<div class="submit-button">
<input type="submit" name="submit" class="btn btn-primary" value="Guardar">
</div>
</form>
</div>
	</main>
	</div>

</body>

</html>
