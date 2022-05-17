<?php
    session_start();

if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $cad = $_POST['cad'];
    $nom = $_POST['nom'];
    $contingut = $_POST['contingut'];

    $sql = "insert into Noticia(titol,caducitat,cos) values ('$nom','$cad','$contingut');";
    if (mysqli_query($conectar, $sql)) {
        echo '<script type="text/javascript"> window.onload = function () { alert("S\'ha creat la noticia"); }</script>';
    }
    else {
        echo '<script type="text/javascript">window.onload = function () { alert("S\'ha produit un error"); }</script>';
    }

}
include 'head.php';
?>
    <body>
        <div class="wrapper a">
            <?php
                include 'header.php';
                include 'aside.php';
            ?>
<main>
<br>
<div class="form1-group">

    <form method="post">
        <label for="nom">Titol</label>
        <input type="text" class="form-control" id="nom" name="nom" required>

        <label for="cad">Caducitat</label>
        <input type="date" class="form-control" id="cad" name="cad"><br>

         <label for="contingut">Contingut</label>
         <textarea name="contingut" form="noticia">Escriu el cos de la noticia...</textarea>

    </div><br>
<div class="submit-button">
    <input type="submit" name="submit" class="btn btn-primary" value="Guardar">
</div>    
</form>
</div>
        </main>
        </div>

    </body>

</html>

