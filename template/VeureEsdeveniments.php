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
        <h1 class="main-title">Veure Esdeveniments</h1>
        <div class="vista-group">
            <h2>Esdeveniment</h2>
            <table class="tg table-bordered">
                <thead>
                    <tr>
                        <th>Esdeveniment</th>
                        <th>Grup</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                     $Esdeveniment = mysqli_query($conectar,"select id,nom,data from Esdeveniment;");
                    while($esdv=mysqli_fetch_assoc($Esdeveniment)){
                        $esdvNom=$esdv['nom'];
                        $esdvID=$esdv['id'];
                        $esdvData=$esdv['data'];
                        echo " <tr><td><a href=\"?espai=esdeveniment&id=$esdvID\">$esdvNom ($esdvData)<a></td><td>";

                        $Usuaris = mysqli_query($conectar,"select g.nom from Grup g inner join Grup_has_Esdeveniment ge on g.id_grup = ge.Grup_id_grup inner join Esdeveniment e on e.id = ge.Esdeveniment_id where e.id = $esdvID;");
                        while($usuari=mysqli_fetch_assoc($Usuaris)){

                            echo $usuari['nom'];
                            echo '<br>';
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
