<?php
    session_start();
//Si arriba un submit i no esta buit
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $arrayAlumnes =$_POST["alumne"];
    $claseEscollit =$_POST["clase"];

    $query = 'insert ignore into Usuari_has_Classe values';
    foreach ($arrayAlumnes as $almn) {
        $query.="('$almn',$claseEscollit),";
    }
    $query = substr($query,0,strlen($query)-1);
    $query.=';';

    if (mysqli_query($conectar, $query)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'han asignat els usuaris"); }</script>';
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
<h1 class="main-title">Afegir Usuaris a Classe</h1>
<div class="form2-group">

<?php
//Printar el formulari
echo '<form method="post">';

$Usuaris = mysqli_query($conectar,"select * from Usuari where Tipus_id != 3;");
$clases = mysqli_query($conectar,"select * from Classe;");

echo '<div class="usuarisSelector">';
echo '<h4>Tria els usuaris que vols inserir al clase</h4>';
while($usuari=mysqli_fetch_assoc($Usuaris))
{
    $UsrUsrname=$usuari['username'];
    $UsrNom=$usuari['nom'];
    $UsrCognom=$usuari['cognoms'];
    echo "<input type=\"checkbox\" id=\"$UsrUsrname\" name=\"alumne[]\" value=\"$UsrUsrname\">";
        echo "<label for=\"$UsrUsrname\">$UsrNom $UsrCognom ($UsrUsrname)</label><br>";

}
echo '</div>';

echo '<div class="usuarisSelector">';
echo '<h4>Escull la Classe</h4>';
echo '<select name="clase" id="clase">';
while($clase=mysqli_fetch_assoc($clases)){
    $claseID=$clase['id'];
    $claseNom=$clase['Nom'];

    echo "<option value=\"$claseID\">$claseNom</option>";
}
echo '</select>';
echo '</div><br>';
echo '<div class="submit-button"><input type="submit" name="submit" class="btn btn-primary" value="Guardar"></div>';

echo '</form></div>';
 ?>
</main>
	</div>

</body>

</html>
