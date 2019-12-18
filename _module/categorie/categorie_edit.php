<?php
require "../_include/inc_config.php";
require "../_entite/categorie.php";

if (isset($_POST["submit"])) {
    extract($_POST);  
    $option[":cat_label"]=$cat_label;
   
 
    if ($cat_id==0)
        insertcategorie($option);
    else
        updatecategorie($option,$cat_id);       

    header("location:" . hlien("categorie","index") );

} else {

    extract($_GET);
    if ($id > 0) { //UPDATE        
        $row=findcategorieById($id);       
        extract($row);
    } else { //INSERT
        $cat_id=0;
        $cat_label="";
      

    }
}

$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";