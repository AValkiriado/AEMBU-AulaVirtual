<?php 
$Esdeveniments = mysqli_query($conectar,"select e.* from Esdeveniment e inner join Grup_has_Esdeveniment ge on ge.Esdeveniment_id = e.id inner join Grup g on g.id_grup = Grup_id_grup inner join Usuari_has_Grup ug on ug.Grup_id_grup = g.id_grup inner join Usuari u on u.username = ug.Usuari_username where u.username='$id';");

$result = "";

while($esdeveniment=mysqli_fetch_assoc($Esdeveniments))
                        {
                            $esdevenimentID = $esdeveniment["id"];
                            $esdevenimentNom = $esdeveniment["nom"];
                            $esdevenimentData = $esdeveniment["data"];
                            $esdevenimentDescripcio = $esdeveniment["Descripcio"];
                            $esdevenimentLoc = $esdeveniment["localitzacio"];

                            $result .= "
                            <a class=\"linkesdeveniment\" href=\"?espai=esdeveniment&id=$esdevenimentID\">
                            <div class=\"esdeveniment\">
                                    <div class=\"tema\">
                                        <div class=\"horaesdeveniment\">$esdevenimentData</div>
                                        <div class=\"nomesdeveniment\">$esdevenimentNom</div>
                                    </div>
                                </div>
                            </a>
                            ";
                        }
?>

<div class="img-avatar">
  <a class="perfil-link" href="?espai=conf" aria-expanded="false">
  <img class="avatar" src="assets/img/avatares/<?php echo $_SESSION['imatge'];?>" />
  </a>
</div>









<aside class="asidePC">
    <div class="aside">
        <div class="perfil">
            <div class="avatar center">
                <img src="assets/img/avatares/<?php echo $_SESSION['imatge'];?>" />
            </div>
            <div class="dadesUsuari center">
                <p class="nom"><?php echo $_SESSION['nom'];?></p>
                <p class="cognoms"><?php echo $_SESSION['cognoms']; ?></p>
                <?php
                  if($_SESSION['tipo']==2){
                    echo '<p class="professor">Profe</p>';
                  }
                ?>
                <br>
                <p class="config conf-movil">
                    <a href="?espai=conf">
                        <button type="button" class="btn btn-dark">
                            El meu perfil
                        </button>
                    </a>
                </p>
            </div>
        </div>

        <div class="llistaesdeveniments">
            <h4>Esdeveniments</h4>
            <?php echo $result;?>
        </div>

    </div>
</aside>


