<?php
    include 'head.php';
    $idClase = $_GET['id'];
?>
 <body>

	<div class="wrapper">
        <?php
            include 'header.php';
            include 'aside.php';
        ?>
		<main>
            <div class="material" style="margin: 2%;">
              <?php
                  $contingut = mysqli_query($conectar,"select * from Classe where id=$idClase;");
                  $cont=mysqli_fetch_assoc($contingut);
                  $titol = $cont['Nom'];
                  $contingut = $cont['Contingut'];
//                   echo "<h1 class=\"titolMaterial\">$titol</h1>";
                  echo "<p class=\"contingut\">$contingut</p>";

              ?>
            </div>
             <?php
              if($_SESSION['tipo']==2){
              echo '<div class="alumnes" style="background: #8089BA; width: 30%; border-radius: 10px; text-align: center; margin-left: 5%;">
                <h2>Alumnes:</h2>
                ';
                  $alumnes = mysqli_query($conectar,"select * from Usuari u inner join Usuari_has_Classe uc on u.username = uc.Usuari_username where uc.Classe_id = $idClase and Tipus_id = 1;");


                  while($alumne=mysqli_fetch_assoc($alumnes)){
                      $alumneID = $alumne["username"];
                      $alumneNom = $alumne["nom"];
                      $alumneCognom = $alumne["cognoms"];

                      echo "<p>$alumneNom $alumneCognom</p>";
                  }
                echo '</div>';
                echo '<br><br>';
                echo "<a style=\"margin:2%;\" href=\"?espai=editarClasse&id=$idClase\"><button type=\"button\" class=\"btn btn-primary\">EDITAR CONTINGUT</button></a>";
                echo "<a style=\"margin:2%;\" href=\"?espai=imgClasse&id=$idClase\"><button type=\"button\" class=\"btn btn-success\">EDITAR IMATGE</button></a>";
              }
            ?>
		</main>
	</div>

</body>

</html>

