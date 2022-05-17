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
        <h1 class="main-title">Veure Usuaris</h1>
        <div class="vista-group">
            <h2>Usuaris de l'AEMBU:</h2>
            <table class="tg table-bordered">
                <thead>
                    <tr>
                        <th>Usuari</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                    $Usuaris = mysqli_query($conectar,"select u.nom,u.cognoms,u.username,t.nom as tipus from Usuari u inner join Tipus t on t.id = u.Tipus_id;");
                    while($usuari=mysqli_fetch_assoc($Usuaris)){
                        $UsrUsrname=$usuari['username'];
                        $UsrNom=$usuari['nom'];
                        $UsrCognom=$usuari['cognoms'];
                        $UsrTipus=$usuari['tipus'];
                        echo " <tr>
                            <td>$UsrNom $UsrCognom ($UsrUsrname)</td>
                            <td>$UsrTipus</td>
                        </tr>";
                    }
                   ?>
                </tbody>
            </table>
        </div>
		</main>
	</div>

</body>

</html>
