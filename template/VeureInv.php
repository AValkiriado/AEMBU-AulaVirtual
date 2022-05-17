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
        <h1 class="main-title">Veure Inventari</h1>
        <div class="vista-group">
            <h2>Inventari</h2>
            <table class="tg table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Marca</th>
                        <th>Model</th>
                        <th>Localització</th>
                        <th>Usuari</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                     $Classes = mysqli_query($conectar,"select * from Inventari;");
                    while($classe=mysqli_fetch_assoc($Classes)){
                        $ClasseNom=$classe['nom'];
                        $ClasseMarca=$classe['marca'];
                        $ClasseModel=$classe['model'];
                        $ClasseLoc=$classe['localitzacio'];
                        $ClasseUsr=$classe['Usuari_username'];
                        echo " <tr><td>$ClasseNom</td><td>$ClasseMarca</td><td>$ClasseModel</td><td>$ClasseLoc</td><td>$ClasseUsr</td>";
                    }
                   ?>
                </tbody>
            </table>
        </div>
		</main>
	</div>

</body>

</html>
