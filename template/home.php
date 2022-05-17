<?php
    include 'head.php';
    if($_SESSION['tipo']==3){ header("location: /index.php?espai=admin");}
?>

<!-- PHP PER ESDEVENIMENTS -->
<?php 
$Esdeveniments = mysqli_query($conectar,"select e.* from Esdeveniment e inner join Grup_has_Esdeveniment ge on ge.Esdeveniment_id = e.id inner join Grup g on g.id_grup = Grup_id_grup inner join Usuari_has_Grup ug on ug.Grup_id_grup = g.id_grup inner join Usuari u on u.username = ug.Usuari_username where u.username='$id';");

$result = "";

while($esdeveniment=mysqli_fetch_assoc($Esdeveniments))
                        {
                            $esdevenimentID = $esdeveniment["id"];
                            $esdevenimentNom = $esdeveniment["nom"];
                            $esdevenimentData = $esdeveniment["data"];
                            $esdevenimentDescripcio = $esdeveniment["Descripcio"];
                            $esdevenimentLoc = $esdeveniment["localitzacio"];

                            $result .= "
                            <a class=\"linkesdeveniment\" href=\"?espai=esdeveniment&id=$esdevenimentID\">
                            <div class=\"esdeveniment\">
                                    <div class=\"tema\">
                                        <div class=\"horaesdeveniment\">$esdevenimentData</div>
                                        <div class=\"nomesdeveniment\">$esdevenimentNom</div>
                                    </div>
                                </div>
                            </a>
                            ";
                        }
?>

 <body>

	<div class="wrapper a">
        <?php
            include 'header.php';
            include 'aside.php';
        ?>
		<main>

			<div class="assignatures">
                <?php
                    include 'clase.php';
                ?>
			</div>

            <div class="esdeveniment-mov">
                <h4>Esdeveniments</h4>
                <?php echo $result;?>
            </div>
            <div style='clear:both'></div>
		</main>
	</div>

</body>

</html>
