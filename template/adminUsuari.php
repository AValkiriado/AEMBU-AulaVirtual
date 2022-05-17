
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
                <a href="?espai=admin&admin=CreateUsr">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Crear Usuari</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=DesactivarUsr">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Desactivar Usuaris</u></div>
                    </div>
                </a>
<!--                <a href="?espai=admin&admin=UsrToClass">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Substituir Usuaris</u></div>
                    </div>
                </a>-->
                <a href="?espai=admin&admin=VeureUsuari">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Veure els Usuaris</u></div>
                    </div>
                </a>
            </div>
		</main>
	</div>

</body>

</html>
