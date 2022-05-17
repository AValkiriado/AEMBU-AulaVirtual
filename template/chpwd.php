<?php
    //Si arriba un submit i no esta buit
    if(isset($_POST['submit'])&&!empty($_POST['submit'])){
        $clau = $_POST['old'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        $consulta = mysqli_query($conectar,"SELECT * from Usuari where username = '$username'");
        $array = mysqli_fetch_assoc($consulta);

        if (strpos($n1," ") || mb_strlen($n1) > 20 ) {
                    $msg = "La contrasenya pot contenir un màxim de 20 caràcters sense espais en blanc";
        } else {

            if (password_verify($clau, $array['contrasenya'])){
                if ($n1==$n2) {
                    $contra = password_hash($n1, CRYPT_SHA256);
                    $consulta = mysqli_query($conectar,"Update Usuari set contrasenya='$contra' where username = '$username'");
                    $msg = "La contrasenya s'ha canviat correctament";
                }
                else{$msg = "Les contrasenyes no són iguals";}
            }
            else{$msg = "La contrasenya no coincideix";}
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
<h1 class="main-title">Canvi de Contrasenya</h1>
<div class="form1-group">

    <form method="post">
    <?php 
        if (isset($msg)) {
            echo "<script type=\"text/javascript\"> window.onload = function () { alert(\"$msg\"); }</script>";
        }
    ?>
    <label for="old">Contrasenya Antiga</label>
    <input type="password" class="form-control" id="old" name="old" required>
    <label for="n1">Nova Contrasenya</label>
    <input type="password" class="form-control" id="n1" name="n1" required>

    
    <label for="n2">Repeteix la contrasenya</label>
    <input type="password" class="form-control" id="n2" name="n2" required>

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

