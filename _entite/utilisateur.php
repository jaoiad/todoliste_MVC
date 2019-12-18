<?php
/**
 * requete pour désinscrire un client à une leçon
 */
function desincrire($le_id,$cl_id) {
    global $link;

    $sql="delete from plannifier where pl_utilisateur=:le_id and pl_client=:cl_id";
    $statement = $link->prepare($sql);
    $statement->execute([":le_id"=>$le_id,":cl_id"=>$cl_id]);
}

/**
 * insert une nouvelle leçon
 */
function insertutilisateur($option) {    
    global $link;

    $sql = "insert into utilisateur values (null,:ut_nom, :ut_prenom, :ut_username, :ut_passw)";
    $statement = $link->prepare($sql);        
    $statement->execute($option); 
}

/**
 * Maj d'une leçon
 */
function updateutilisateur($option,$ut_id) {
    global $link;

    $sql = "update utilisateur set ut_nom=:ut_nom, ut_prenom=:ut_prenom, ut_username=:ut_username, ut_passw=:ut_passw where ut_id=:ut_id";
    $statement = $link->prepare($sql);
    $option[":ut_id"]=$ut_id;
    $statement->execute($option); 
}

/**
 * 
 */
function findutilisateurById($id) {
    global $link;

    $sql = "select * from utilisateur where ut_id=:id";
    $statement = $link->prepare($sql);
    $statement->execute([":id"=>$id]);
    return $statement->fetch();    
}

/**
 * liste des inscrit à la utilisateur $le_id
 */
function listeInscrit($le_id) {
    global $link;

    $sql="select * from plannifier,client where pl_client=cl_id and pl_utilisateur=:le_id";
    $statement = $link->prepare($sql);
    $statement->execute([":le_id"=>$le_id]);
    $data=$statement->fetchAll();        
    return $data;
}

/**
 * liste toutes les utilisateurs
 */
function findAllutilisateur() {
    global $link;

    $sql="select * from utilisateur ";
    $result=$link->query($sql);
    return $result->fetchAll();
}

/**
 * return une voiture
 */
function getVoiture($vo_id) {
    global $link;
    $sql="select * from voiture where vo_id=:id";
    $st=$link->prepare($sql);
    $st->execute([":id"=>$vo_id]);
    $row=$st->fetch();
    if ($row)
        $chaine=$row["vo_immatriculation"] . "<br>" . $row["vo_nom"];
    else
        $chaine="aucune";

    return $chaine;
}

/**
 * recherche un client
 */
function rechercheClient($chercher, $le_id){
    global $link;
    $sql="select * from client where cl_nom like '$chercher%' and cl_id not in (select pl_client from plannifier where pl_utilisateur=$le_id)";
    $result=$link->query($sql);
    $data=$result->fetchAll();

    return($data);
}


/**
 * 
 */