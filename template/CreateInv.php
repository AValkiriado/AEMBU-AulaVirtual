<?php
    session_start();
//Si arriba un submit i no esta buit
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $loc = $_POST['loc'];
    $marca = $_POST['marca'];
    $model = $_POST['model'];
    $nom = $_POST['nom'];

    $sql = "insert into Inventari(nom,marca,model,localitzacio) values ('$nom','$marca','$model','$loc');";

    if (mysqli_query($conectar, $sql)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'ha creat l\'element"); }</script>';
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

<h1 class="main-title">Crear Element</h1>
<div class="form1-group">

    <form method="post">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" required>

    <label for="marca">Marca</label>
    <input type="text" class="form-control" id="marca" name="marca">

    <label for="model">Model</label>
    <input type="text" class="form-control" id="model" name="model">

    <label for="loc">Localització</label>
    <input type="text" class="form-control" id="loc" name="loc">

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

