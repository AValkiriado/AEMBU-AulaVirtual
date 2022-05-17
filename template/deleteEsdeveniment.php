<?php
    session_start();
//Si arriba un submit i no esta buit
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $arrayEsdeveniments =$_POST["alumne"];

    $query = 'delete from Grup_has_Esdeveniment where ';
    foreach ($arrayEsdeveniments as $almn) {
        $query.="Grup_id_grup = '$almn' or";
    }
    $query = substr($query,0,strlen($query)-2);
    $query.=';';
    // echo $query;
    if (mysqli_query($conectar, $query)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'han eliminat els esdeveniments"); }</script>';
    }
    else {
        echo '<script type="text/javascript">window.onload = function () { alert("S\'ha produit un error"); }</script>';
    }
}

include 'head.php';
echo '<body><div class="wrapper a">';
include 'header.php';
include 'aside.php';
//Printar el formulari
echo '
<main>
<br><br>
<h1 class="main-title">Desactivar Esdeveniments</h1>
<div class="form2-group">

    <form method="post">
';

$Usuaris = mysqli_query($conectar,"select * from Grup;");
$Grups = mysqli_query($conectar,"select * from Esdeveniment");

echo '<div class="usuarisSelector">';
echo '<h4>Escull els esdeveniments que vols Desactivar</h4>';
while($grup=mysqli_fetch_assoc($Grups))
{
    $GrupID=$grup['id'];
    $GrupNom=$grup['nom'];

    echo "<input type=\"checkbox\" id=\"$GrupID\" name=\"alumne[]\" value=\"$GrupNom\">";
        echo "<label for=\"$GrupID\">$GrupNom</label><br>";

}
echo '</select>';
echo '</div><br>';
echo '<div class="submit-button"><input type="submit" name="submit" class="btn btn-primary" value="Guardar"></div>';

echo '</form></div>';
 ?>


