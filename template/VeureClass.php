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
        <h1 class="main-title">Veure Classes</h1>
        <div class="vista-group">

            <h2>Classes Individuals</h2>
            <table class="tg table-bordered">
                <thead>
                    <tr>
                        <th>Classe</th>
                        <th>Usuaris</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                     $Classes = mysqli_query($conectar,"select DISTINCT c.id, c.nom from Classe c inner join Usuari_has_Classe uc on uc.Classe_id = c.id;");
                    while($classe=mysqli_fetch_assoc($Classes)){
                        $ClasseNom=$classe['nom'];
                        $ClasseID=$classe['id'];
                        echo " <tr><td>$ClasseNom</td><td>";

                        $Usuaris = mysqli_query($conectar,"select u.nom,u.cognoms,u.username from Usuari u inner join Usuari_has_Classe uc on uc.Usuari_username = u.username where uc.Classe_id=$ClasseID;");
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
            <h2>Classes de Grup</h2>
            <table class="tg table-bordered">
                <thead>
                    <tr>
                        <th>Classe</th>
                        <th>Usuaris</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                     $Classes = mysqli_query($conectar,"select id, nom from Classe;");
                    while($classe=mysqli_fetch_assoc($Classes)){
                        $ClasseNom=$classe['nom'];
                        $ClasseID=$classe['id'];
                        echo " <tr><td>$ClasseNom</td><td>";
                        $Usuaris2 = mysqli_query($conectar,"select Distinct u.nom, u.cognoms, u.username from Classe c inner join Grup_has_Classe gc on gc.Classe_id = c.id inner join Grup g on g.id_grup = gc.Grup_id_grup inner join Usuari_has_Grup ug on ug.Grup_id_grup = g.id_grup inner join Usuari u on u.username = ug.Usuari_username where c.id=1;");
                        while($usuari=mysqli_fetch_assoc($Usuaris2)){
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
</body>

</html>
