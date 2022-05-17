<?php
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $nom = $_POST['nom'];
    $ubi = $_POST['ubi'];
    $dia = $_POST['dia'];
    $horaini = $_POST['horaini'];
    $horafi = $_POST['horafi'];
    $hora = $horaini.'-'.$horafi;
    $alumne = $_POST['Alumne'];

    $sql = "insert into Classe (Nom,Ubicacio,Dia,Hora,imatge,Any_idAny) values ('$nom','$ubi','$dia','$hora','1.png','$any');";

    if (mysqli_query($conectar, $sql)) {

        $classe = mysqli_query($conectar, "SELECT id from Classe where Nom='$nom' and Ubicacio='$ubi' and Dia='$dia' and Hora='$hora' and Any_idAny='$any'");

        while($cls=mysqli_fetch_assoc($classe)){
            $idClasse = $cls["id"];
            $sql2 = "insert into Grup_has_Classe Values ($alumne,$idClasse)";
            mysqli_query($conectar, $sql2);
            echo '<script type="text/javascript"> window.onload = function () { alert("S\'ha creat la classe"); }</script>';
        }
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
<h1 class="main-title">Crear Classe de Grup</h1>
<div class="form1-group">

    <form method="post">

    <label for="nom">Nom de la Classe</label>
    <input type="text" class="form-control" id="nom" name="nom" required><br>

    <label for="ubi">Ubicacio</label>
    <input type="text" class="form-control" id="ubi" name="ubi" required><br>

    <label for="dia">Dia</label>
    <select class="form-control" id="dia" name="dia">
        <option value="Dilluns">Dilluns</option>
        <option value="Dimarts">Dimarts</option>
        <option value="Dimecres">Dimecres</option>
        <option value="Dijous">Dijous</option>
        <option value="Divendres">Divendres</option>
        <option value="Dissabte">Dissabte</option>
        <option value="Diumenge">Diumenge</option>
    </select>

    <br>

    <label for="horaini">Hora Inici</label>
    <input type="time" class="form-control" id="horaini" name="horaini" value="09:55" required><br>

    <label for="horafi">Hora Fi</label>
    <input type="time" class="form-control" id="horafi" name="horafi" value="10:55" required><br>

    <label for="Alumne">Grup:</label>
    <select name="Alumne" id="Alumne">
    <?php
                    $Alumnes = mysqli_query($conectar,"select g.id_grup, g.nom from Grup g;");
                    while($alumne=mysqli_fetch_assoc($Alumnes)){
                        $grupNom=$alumne['nom'];
                        $grupID=$alumne['id_grup'];
                        echo "<option value=\"$grupID\">$grupNom</option>";
                    }
    ?>
    
</div><br>
<div class="submit-button">
<input type="submit" name="submit" class="btn btn-primary" value="Guardar">
                </div>
</form>
                </div>
<main>


