<div class="wrapper">
    <?php
        include 'header.php';
        include 'aside.php';
        
    ?>
<?php
    include 'head.php';
    $id = $_GET['id'];
    $Esdeveniments = mysqli_query($conectar,"select * from Esdeveniment where id = $id;");
    $esdeveniment=mysqli_fetch_assoc($Esdeveniments);
                        
        $esdevenimentID = $esdeveniment["id"];
        $esdevenimentNom = $esdeveniment["nom"];
        $esdevenimentData = $esdeveniment["data"];
        $esdevenimentDescripcio = $esdeveniment["Descripcio"];
        $esdevenimentLoc = $esdeveniment["localitzacio"];

?>
    <main>
        <div class="esdeveniments center">

            
                <?php 
                
                if ($esdevenimentDescripcio == null) {
                    echo "$esdevenimentData <br>";
                    echo "$esdevenimentLoc <br>";
                    echo $esdevenimentNom;
                } else {
                    echo $esdevenimentDescripcio;
                }
                
                ?>

            <?php
              if($_SESSION['tipo']==3){
                echo '<br><br>';
                echo "<a style=\"margin:2%;\" href=\"?espai=editarEsdeveniment&id=$esdevenimentID\"><button type=\"button\" class=\"btn btn-primary\">EDITAR CONTINGUT</button></a>";
              }
            ?>

            
        </div>
    <main>
        <?php 
        ?>
</div>
