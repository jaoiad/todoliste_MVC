<?php
require "../_include/inc_config.php";
$sql="select * from categorie";
$result=$link->query($sql);
$data=$result->fetchAll();

$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";