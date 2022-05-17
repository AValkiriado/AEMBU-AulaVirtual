
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
            <div class="taulerAdministració">
                <a href="?espai=admin&admin=CreateGrup">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Crear Grup</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=UsrToGrup">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Afegir Usuari</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=RemoveUsrToGrup">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Treure usuari d'un grup</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=VeureGrup">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Veure els Grups</u></div>
                    </div>
                </a>
            </div>
		</main>
	</div>

</body>

</html>
