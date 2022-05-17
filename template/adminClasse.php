 
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
                <a href="?espai=admin&admin=CreateClasseInd">
                    <div class="assignatura adm" style="background-color: #629e48; display:initial;">
                        <div class="assign" style="font-size:33pt;text-align:center;"><u>Crear Classe Individual</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=CreateClasseGrup">
                    <div class="assignatura adm" style="background-color: #629e48; display:initial;">
                        <div class="assign" style="font-size:33pt;text-align:center;"><u>Crear Classe de Grup</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=UsrToClass">
                    <div class="assignatura adm" style="background-color: #629e48; display:initial;">
                        <div class="assign" style="font-size:33pt;text-align:center;"><u>Afegir Usuari a Classe</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=GrupToClass">
                    <div class="assignatura adm" style="background-color: #629e48; display:initial;">
                        <div class="assign" style="font-size:33pt;text-align:center;"><u>Afegir Grup a Classe</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=VeureClass">
                    <div class="assignatura adm" style="background-color: #629e48; display:initial;">
                        <div class="assign" style="font-size:33pt;text-align:center;"><u>Veure Classe</u></div>
                    </div>
                </a>
            </div>
		</main>
	</div>

</body>

</html>
