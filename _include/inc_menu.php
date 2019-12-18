<?php
$menu=array(
    [hlien("utilisateur","index"),"utilisateur"], 
    [hlien("tache","index"),"tache"],
    [hlien("categorie","index"),"categorie"],    
    [hlien("database","creer"),"RAZ BDD"],
    [hlien("database","dataset"),"jeu de données"]
);
?>

<div class="myflexMenu">
	<?php affiche_menu($menu); ?>		
</div>