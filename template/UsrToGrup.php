<?php
    session_start();
//Si arriba un submit i no esta buit
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $arrayAlumnes =$_POST["alumne"];
    $GrupEscollit =$_POST["grup"];

    $query = 'insert ignore into Usuari_has_Grup values';
    foreach ($arrayAlumnes as $almn) {
        $query.="('$almn',$GrupEscollit),";
    }
    $query = substr($query,0,strlen($query)-1);
    $query.=';';
    $resultat = mysqli_query($conectar,$query);
}


//Printar el formulari
echo '<form method="post">';

$Usuaris = mysqli_query($conectar,"select * from Usuari where Tipus_id != 3;");
$Grups = mysqli_query($conectar,"select * from Grup;");

echo '<div class="usuarisSelector">';
echo '<h4>Tria els usuaris que vols inserir al grup</h4>';
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
echo '<h4>Escull el grup</h4>';
echo '<select name="grup" id="grup">';
while($grup=mysqli_fetch_assoc($Grups))
{
    $GrupID=$grup['id_grup'];
    $GrupNom=$grup['nom'];

    echo "<option value=\"$GrupID\">$GrupNom</option>";

}
echo '</select>';
echo '</div><br>';
echo '<input type="submit" name="submit" class="btn btn-primary" value="Guardar">';

echo '</form>';
 ?>
