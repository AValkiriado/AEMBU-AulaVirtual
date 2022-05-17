
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
                <a href="?espai=admin&admin=CreateEsdeveniment">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Crear Esdeveniment</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=EsdevenimentToGrup">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Afegir Grup</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=RemoveEsdevenimentToGrup">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Treure Grup</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=deleteEsdeveniment">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Borrar Esdeveniment</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=VeureEsdeveniments">
                    <div class="assignatura adm" style="background-color: #629e48">
                        <div class="assign"><u>Veure els Esdeveniments</u></div>
                    </div>
                </a>
            </div>
		</main>
	</div>

</body>

</html>
