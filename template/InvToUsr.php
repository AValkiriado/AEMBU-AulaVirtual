<?php
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $alumne = $_POST['Alumne'];
    $element = $_POST['Element'];

    $sql = "Update Inventari set Usuari_username = '$alumne' where id = $element;";

    if (mysqli_query($conectar, $sql)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'ha assignat l\'element"); }</script>';
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
<h1 class="main-title">Assignar un Element a un Usuari</h1>
<div class="form2-group">

    <form method="post">

     <label for="Element">Element:</label>
    <select name="Element" id="Element">
    <?php
        $Inventari = mysqli_query($conectar,"select * from Inventari where Usuari_username is null;");
        while($inv=mysqli_fetch_assoc($Inventari)){
            $invId = $inv['id'];
            $invNom = $inv['nom'];
            $invMarca = $inv['marca'];
            $invModel = $inv['model'];


            echo "<option value=\"$invId\">$invNom $invMarca ($invModel)</option>";
        }
    ?>
    </select>

    <label for="Alumne">Usuari:</label>
    <select name="Alumne" id="Alumne">
    <?php
        $Alumnes = mysqli_query($conectar,"select u.nom,u.cognoms,u.username from Usuari u inner join Tipus t on t.id = u.tipus_id where u.Tipus_id !=3;");
        while($alumne=mysqli_fetch_assoc($Alumnes)){
            $UsrUsrname=$alumne['username'];
            $UsrNom=$alumne['nom'];
            $UsrCognom=$alumne['cognoms'];
            echo "<option value=\"$UsrUsrname\">$UsrNom $UsrCognom ($UsrUsrname)</option>";
        }
    ?>
    </select>
</div>
<div class="submit-button">
<input type="submit" name="submit" class="btn btn-primary" value="Guardar">
    </div>
</form></div>
<main>

