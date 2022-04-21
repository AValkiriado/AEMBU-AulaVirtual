<?php

echo '<div style="display: inline-block; width:100%;" class="grupclass"><h1 style="margin-left:5%;">Classes en Grup</h1>';
$Classes = mysqli_query($conectar,"select c.* from Classe c inner join Grup_has_Classe gc on gc.Classe_id = c.id inner join Grup g on g.id_grup = gc.Grup_id_grup inner join Usuari_has_Grup ug on ug.Grup_id_grup = g.id_grup inner join Usuari u on u.username = ug.Usuari_username where u.username='$id';");

while($classe=mysqli_fetch_assoc($Classes))
{
    $classeID = $classe["id"];
    $classeNom = $classe["Nom"];
    $classeUbi = $classe["Ubicacio"];
    $classeDia = $classe['Dia'];
    $classeHora = $classe['Hora'];
    $classeImatge = $classe['imatge'];

    echo "<a href=\"?espai=classe&id=$classeID\">
        <div class=\"assignatura\">
            <div class=\"tema-img\">
                <img src=\"assets/img/assignaturas/$classeImatge\" />
            </div>
            <div class=\"tema\">
                <div class=\"assign\"><u>$classeNom</u></div>
                <div class=\"hora\">$classeDia , $classeHora</div>
            </div>
        </div>
    </a>
    ";
/*
    echo "<a href=\"?espai=classe&id=$classeID\">
    		<div class=\"card mb-3\" style=\"max-width: 50%;\">
  			<div class=\"row g-0\">
   				 <div class=\"col-md-4\">
      					<img src=\"assets/img/assignaturas/$classeImatge\" class=\"img-fluid rounded-start\">
    				</div>
    				<div class=\"col-md-8\">
      					<div class=\"card-body\">
        					<h5 class=\"card-title\">$classeNom</h5>
        					<p class=\"card-text\">$classeDia , $classeHora</p>
        					<p class=\"card-text\"><small class=\"text-muted\">$classeUbi</small></p>
      					</div>
    				</div>
  			</div>
		</div>
	   </a>";
*/
}

echo '</div>';



echo '<div style="display: inline-block;width:100%;" class="soloclass"><h1 style="margin-left:5%;">Classes Individuals</h1>';
$Classes = mysqli_query($conectar,"select c.* from Classe c inner join Usuari_has_Classe uc on c.id = uc.Classe_id inner join Usuari u on uc.Usuari_username = u.username where u.username='$id';");
while($classe=mysqli_fetch_assoc($Classes))
{
    $classeID = $classe["id"];
    $classeNom = $classe["Nom"];
    $classeUbi = $classe["Ubicacio"];
    $classeDia = $classe['Dia'];
    $classeHora = $classe['Hora'];
    $classeImatge = $classe['imatge'];

    echo "<a href=\"?espai=classe&id=$classeID\">
        <div class=\"assignatura\">
            <div class=\"tema-img\">
                <img src=\"assets/img/assignaturas/$classeImatge\" />
            </div>
            <div class=\"tema\">
                <div class=\"assign\"><u>$classeNom</u></div>
                <div class=\"hora\">$classeDia , $classeHora</div>
            </div>
        </div>
    </a>
    ";

}

echo '</div>';

?>

