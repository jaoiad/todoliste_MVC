<?php
require "../_include/inc_config.php";
require "../_entite/utilisateur.php";

if (isset($_POST["submit"])) {
    extract($_POST);  
    $option[":ut_nom"]=$ut_nom;
    $option[":ut_prenom"]=$ut_prenom;
    $option[":ut_username"]=$ut_username;
    $option[":ut_passw"]=$ut_passw;
    
   

    if ($ut_id==0)
        insertutilisateur($option);
    else
        updateutilisateur($option,$ut_id);       

    header("location:" . hlien("utilisateur","index") );

} else {

    extract($_GET);
    if ($id > 0) { //UPDATE        
        $row=findutilisateurById($id);       
        extract($row);
    } else { //INSERT
        $ut_id=0;
        $ut_nom="";
        $ut_prenom="";
        $ut_username="";
        $ut_passw="";
      

    }
}

$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";