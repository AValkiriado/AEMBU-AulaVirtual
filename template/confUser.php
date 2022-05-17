<?php
    include 'head.php';
?>
 <body>

	<div class="wrapper">
        <?php
            include 'header.php';
            include 'aside.php';
        ?>
		<main>
            <div style="margin-left:2%; font-size: 16pt;">

            <h1><u>Dades d'usuari: </u></h1>
                    <h4>Noms: <?php echo $_SESSION['nom'] ?></h4>
                
                    <h4>Cognoms: <?php echo $_SESSION['cognoms'] ?></h4><br>
                    
                    <a href="?espai=selectImg"><button type="button" class="btn btn-dark" style="color:white">CANVIAR IMATGE DE PERFIL</button></a>
                    <a href="?espai=chpwd"><button type="button" class="btn btn-dark" style="color:white">CANVIAR CONTRASENYA</button></a>
                    <br><br>

                    <?php 

                    $primera = 0;
                    
                    $Inv = mysqli_query($conectar,"select * from Inventari where Usuari_username = '$id'; ");

                    while($invent=mysqli_fetch_assoc($Inv)) {

                        if($primera==0) {
                            echo "<h2>Inventari: </h2>";
                            $primera = 1;
                        }

                        $invNom = $invent["nom"];
                        $invMarca = $invent["marca"];
                        $invModel = $invent['model'];
                        $Usuari_id = $invent['Usuari_id'];
                        $invLocal = $invent['localitzacio'];
                
                        echo "<div class=\"inventari_usr card\" style=\"margin-right: 75%;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$invNom</h5>
                            <h6 class=\"card-subtitle\">$invMarca</h6>
                            <h6 class=\"card-subtitle\">$invModel</h6>
                        </div>
                        </div>";
                
                    }
                    
                    ?>
<br>

                <p class="sortir sortir-movil"><a href="template/exit.php"><button type="button" class="btn btn-info">Sortir</button></a></p>


            </div>
		</main>
	</div>
</body>

</html>
