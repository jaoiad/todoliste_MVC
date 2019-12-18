<h1>Génération du jeu de données</h1>
<?php
$nbtache = 30;
$nbutilisateur = 10;
$caract = "abcdefghijklmnopqrstuvwyxz0123456789";
$date = date("Y-m-d H:i:s");
$nb_caract = 4;
//création des utilisateurs
echo "<h1>Création des utilisateur</h1>";
$sql = "insert into utilisateur values ";
$data = [];
for ($i = 1; $i <= $nbutilisateur; $i++) {
    $ut_nom = $faker->firstName;
    $ut_prenom = $faker->firstName;
    $ut_username = $faker->lastName;
    for ($j = 1; $j <= $nb_caract; ++$j) {
        $nbr = strlen($caract);
        $nbr = mt_rand(0, ($nbr - 1));
        $passw[$j] = $nbr;
    }
    $ut_passw = password_hash(implode($passw), PASSWORD_DEFAULT);


    $data[] = "(null,'$ut_nom','$ut_prenom','$ut_username','$ut_passw')";
}

$link->query($sql . implode(",", $data));

//création des taches
echo "<h1>Création des taches</h1>";
$data = [];
$sql = "insert into tache values";
for ($i = 1; $i <= $nbtache; $i++) {
    $tac_label = "tache $i";
    $tac_date_heur = $date;
    $tac_memo = $faker->text;
    $rand = rand(1, 2);
    $tac_utilisateur = rand(1, $nbutilisateur);
    $tac_categorie = rand(1, 8);

    if ($rand == 1) {
        $tac_archive = "archivé";
    } else {
        $tac_archive = "non archivé";
    }


    $data[] = "(null,'$tac_label','$tac_date_heur','$tac_memo','$tac_archive','$tac_categorie','$tac_utilisateur')";
}

$link->query($sql . implode(",", $data));

?>