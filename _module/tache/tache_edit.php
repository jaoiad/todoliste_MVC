<?php
require "../_include/inc_config.php";
require "../_entite/tache.php";

if (isset($_POST["btsubmit"])) {
    extract($_POST);  
    $option[":tac_label"]=$tac_label;
    $option[":tac_date_heure"]=$tac_date_heure;
    $option[":tac_memo"]=$tac_memo;
    $option[":tac_archive"]=$tac_archive;
    $option[":tac_categorie"]=$tac_categorie;
    $option[":tac_utilisateur"]=$tac_utilisateur;
    if ($tac_id==0)
        inserttache($option);
    else
        updatetache($option,$tac_id);       

    header("location:" . hlien("tache","index") );

} else {

    extract($_GET);
    if ($id > 0) { //UPDATE        
        $row=findtacheById($id);       
        extract($row);
    } else { //INSERT
        $tac_id=0;
        $tac_label="";
        $tac_date_heure="";
        $tac_memo="";
        $tac_archive="";
        $tac_categorie="";
        $tac_utilisateur="";

    }
}

$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";