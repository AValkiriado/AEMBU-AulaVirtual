<?php
if(isset($_POST['actiu'])&&!empty($_POST['actiu'])){
    //Encriptar contrasenya ijzY9vHrZBWaEixLRSco
    echo $_POST['actiu'];
}





$Usuaris = mysqli_query($conectar,"select * from Usuari where Tipus_id != 3;");
echo '<form method="post">';
echo '<table>
  <tr>
    <th>Username</th>
    <th>Nom</th>
    <th>Desactivar per sempre</th>
  </tr>';
while($usuari=mysqli_fetch_assoc($Usuaris))
{
    $UsrUsrname=$usuari['username'];
    $UsrNom=$usuari['nom'];
    $UsrCognom=$usuari['cognoms'];
    echo "<tr>
            <td>$UsrUsrname</td>
            <td>$UsrNom $UsrCognom</td>
            <td><input type=\"submit\" name=\"actiu\" class=\"button\" value=\"$UsrUsrname\"/></td>
         </tr>";

}
echo '</table>';
echo '</form>';
?>

