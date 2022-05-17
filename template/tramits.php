<?php
    include 'head.php';
?>
 <body>

	<div class="wrapper a">
        <?php
            include 'header.php';
            include 'aside.php';
        ?>
		<main><br>
			<div id="tramitwrapper">
			<?PHP
				$dir = new DirectoryIterator('./tramits');
				foreach ($dir as $fileinfo) {
					if ($fileinfo->isDir() && !$fileinfo->isDot()) {
					$nomdirectori = $fileinfo->getFilename();
							echo "<div id=\"tramit\" style=\"margin: 0 10% 0 10%;\">
							<a href=\"tramits/$nomdirectori/tramit.pdf\" style=\"text-decoration: none; color: black; font-size: 12pt;\">
								<div class=\"card mb-3\">
									<img src=\"tramits/$nomdirectori/tramit.png\" class=\"card-img-top\" alt=\"...\">
									<div class=\"card-body\">
										<h5 class=\"card-title\">$nomdirectori</h5>
									</div>
								</div>
							</a></div>";
					}
				}
			?>
			</div>
		</main>
	</div>

</body>

</html>
