<?php
    include 'head.php';
?>
 <body>

	<div class="wrapper a">
        <?php
            include 'header.php';
            include 'aside.php';
        ?>
		<main>
        <h1 class="main-title">Veure Grups</h1>
        <div class="vista-group">
            <h2>Grups a l'AEMBU</h2>
            <table class="tg table-bordered">
                <thead>
                    <tr>
                        <th>Grup</th>
                        <th>Usuaris</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                     $Classes = mysqli_query($conectar,"select id_Grup, nom from Grup;");
                    while($classe=mysqli_fetch_assoc($Classes)){

                        $idGrup=$classe['id_Grup'];
                        $nomGrup=$classe['nom'];
                        echo " <tr><td>$nomGrup</td><td>";

                        $Usuaris = mysqli_query($conectar,"select u.username, u.nom, u.cognoms from Grup g inner join Usuari_has_Grup ug on ug.Grup_id_Grup = g.id_grup inner join Usuari u on u.username = ug.Usuari_username where g.id_Grup = $idGrup;");
                        while($usuari=mysqli_fetch_assoc($Usuaris)){
                            $UsrUsrname=$usuari['username'];
                            $UsrNom=$usuari['nom'];
                            $UsrCognom=$usuari['cognoms'];
                            echo "$UsrNom $UsrCognom ($UsrUsrname) <br>";
                        }
                        echo '</td></tr>';
                    }
                   ?>
                </tbody>
            </table>
        </div>
		</main>
	</div>

</body>

</html>
