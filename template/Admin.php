<?php
 if (!$_SESSION['tipo']==3)header("Location: ../");
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
                <?php
                    include 'administracio.php';
                ?>
			</div>
		</main>
	</div>

</body>

</html>
