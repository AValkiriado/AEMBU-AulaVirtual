 <?php
    session_start();
//Si arriba un submit i no esta buit
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $arrayAlumnes =$_POST["alumne"];
    $GrupEscollit =$_POST["grup"];

    $query = 'insert ignore into Grup_has_Esdeveniment values';
    foreach ($arrayAlumnes as $almn) {
        $query.="('$almn',$GrupEscollit),";
    }
    $query = substr($query,0,strlen($query)-1);
    $query.=';';
    if (mysqli_query($conectar, $query)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'han asignat els grups"); }</script>';
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
<h1 class="main-title">Afegir Grups que vegin un Esdeveniment</h1>
<div class="form2-group">

    <form method="post">
';

$Usuaris = mysqli_query($conectar,"select * from Grup;");
$Grups = mysqli_query($conectar,"select * from Esdeveniment");

echo '<div class="usuarisSelector">';
echo '<h4>Tria els Grups que vols que vegin aquest esdeveniment</h4>';
while($usuari=mysqli_fetch_assoc($Usuaris))
{
    $UsrUsrname=$usuari['id_grup'];
    $UsrNom=$usuari['nom'];

    echo "<input type=\"checkbox\" id=\"$UsrUsrname\" name=\"alumne[]\" value=\"$UsrUsrname\">";
        echo "<label for=\"$UsrUsrname\">$UsrNom</label><br>";

}
echo '</div>';

echo '<div class="usuarisSelector">';
echo '<h4>Escull l\'esdeveniment</h4>';
echo '<select name="grup" id="grup">';
while($grup=mysqli_fetch_assoc($Grups))
{
    $GrupID=$grup['id'];
    $GrupNom=$grup['nom'];

    echo "<option value=\"$GrupID\">$GrupNom</option>";

}
echo '</select>';
echo '</div><br>';
echo '<div class="submit-button"><input type="submit" name="submit" class="btn btn-primary" value="Guardar"></div>';

echo '</form></div>';
 ?>

