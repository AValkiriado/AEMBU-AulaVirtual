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
                <a href="?espai=admin&admin=CreateInv">
                    <div class="assignatura adm">
                        <div class="assign"><u>Crear Element</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=InvToUsr">
                    <div class="assignatura adm">
                        <div class="assign"><u>Assignar Element</u></div>
                    </div>
                </a>
                <a href="?espai=admin&admin=VeureInv">
                    <div class="assignatura adm">
                        <div class="assign"><u>Veure Inventari</u></div>
                    </div>
                </a>
            </div>
		</main>
	</div>

</body>

</html>

