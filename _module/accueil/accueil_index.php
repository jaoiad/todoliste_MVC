<?php
session_start();
require "../_include/inc_config.php";
require "../_entite/utilisateur.php";



if (isset($_POST['submit'])) {
    extract($_POST);

    $sql = "select*from utilisateur";
    $data = $link->query($sql);

    foreach ($data as $row) {
        $row = array_map("cb_htmlentities", $row);
        extract($row);
        
        if ($_POST["ut_username"] == $ut_username AND password_verify($_POST["ut_passw"],$ut_passw)) {
        

            echo "cest dans la base de donnee ";       
        
    }
}
     
} else {
    $ut_username = "";
    $ut_passw = "";
    $ut_id = 0;
    $message = "";
}







$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
