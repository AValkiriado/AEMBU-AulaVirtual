<?php
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $nom = $_POST['nom'];
    $data = $_POST['data'];
    $loc = $_POST['loc'];

    echo $hora;

    $sql = "insert into Esdeveniment (nom,data,localitzacio) values ('$nom','$data','$loc')";

    if (mysqli_query($conectar, $sql)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'ha creat l\'esdeveniment"); }</script>';
    }
    else {
        echo '<script type="text/javascript">window.onload = function () { alert("S\'ha produit un error"); }</script>';
    }

}

?>
<div class="wrapper">
    <?php
        include 'header.php';
        include 'aside.php';
    ?>
<?php
    include 'head.php';
?>
<main>
<br><br>
<h1 class="main-title">Crear Esdeveniment</h1>
<div class="form1-group">

    <form method="post">

    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" required><br>

    <label for="data">Data</label>
    <input type="text" class="form-control" id="data" name="data" required><br>

    <label for="loc">Localitzacio</label>
    <input type="text" class="form-control" id="loc" name="loc"><br>

</div>
<div class="submit-button">
<input type="submit" name="submit" class="btn btn-primary" value="Guardar">
</div>
</form>
</div>
<main>

