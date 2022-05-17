<?php
    session_start();
//Si arriba un submit i no esta buit
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $ClasseEscollit =$_POST["classe"];
    $GrupEscollit =$_POST["grup"];

    $query = "insert into Grup_has_Classe Values($GrupEscollit,$ClasseEscollit);";
//     $resultat = mysqli_query($conectar,$query);

    if (mysqli_query($conectar, $query)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'ha assignat el grup"); }</script>';
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
<h1 class="main-title">Afegir Grup a Classe</h1>
<div class="form2-group">

<?php
//Printar el formulari
echo '<form method="post">';

$grups = mysqli_query($conectar,"select * from Grup;");
$classes = mysqli_query($conectar,"select * from Classe;");

echo '<div class="classeSelector"><h4>Tria la classe a la que vols posar el grup</h4><select name="classe" id="classe">';
while($classe=mysqli_fetch_assoc($classes)){
    $ClasseID=$classe['id'];
    $ClasseNom=$classe['Nom'];
    $ClasseUbi=$classe['Ubicacio'];
    $ClasseDia=$classe['Dia'];
    $ClasseHora=$classe['Hora'];
    echo "<option value=\"$ClasseID\">$ClasseNom a $ClasseUbi $ClasseDia a les $ClasseHora</option>";
}

echo '</select></div><div class="grupSelector"><h4>Tria el grup</h4><select name="grup" id="grup">';
while($grup=mysqli_fetch_assoc($grups)){
    $grupNom = $grup['nom'];
    $grupID = $grup['id_grup'];
    echo "<option value=\"$grupID\">$grupNom</option>";
}
echo '</select></div><br>';
echo '<div class="submit-button"><input type="submit" name="submit" class="btn btn-primary" value="Guardar"></div>';

echo '</form></div>';
 ?>
</main>
	</div>

</body>

</html>
