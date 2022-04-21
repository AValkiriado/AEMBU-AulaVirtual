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
                <form method="post" action="php/canviDades.php">
                    <input type="hidden" id="UsrId" name="id" value="<?php echo $username ?>">
                    <label for="fname">Nom:</label><br>
                    <input type="text" id="nom" name="nom" value="<?php echo $_SESSION['nom'] ?>"><br>

                    <label for="lname">Cognoms:</label><br>
                    <input type="text" id="cognom" name="cognom" value="<?php echo $_SESSION['cognoms'] ?>"><br><br>
                    <input type="submit" value="Enviar">

                </form>
            </div>
		</main>
	</div>
</body>

</html>
