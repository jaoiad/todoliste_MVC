<?php
/**
 * requete pour désinscrire un client à une leçon
 */
function desincrire($le_id,$cl_id) {
    global $link;

    $sql="delete from plannifier where pl_tache=:le_id and pl_client=:cl_id";
    $statement = $link->prepare($sql);
    $statement->execute([":le_id"=>$le_id,":cl_id"=>$cl_id]);
}

/**
 * insert une nouvelle leçon
 */
function inserttache($option) {    
    global $link;

    $sql = "insert into tache values (null,:tac_label, :tac_date_heure, :tac_memo, :tac_archive, :tac_categorie, tac_utilisateur )";
    $statement = $link->prepare($sql);        
    $statement->execute($option); 
}

/**
 * Maj d'une leçon
 */
function updatetache($option,$tac_id) {
    global $link;

    $sql = "update tache set tac_label=:tac_label, tac_date_heure=:tac_date_heure, tac_memo=:tac_memo, tac_archive=:tac_archive, tac_categorie=:tac_categorie, tac_utilisateur=:tac_utilisateur where tac_id=:tac_id";
    $statement = $link->prepare($sql);
    $option[":tac_id"]=$tac_id;
    $statement->execute($option); 
}

/**
 * 
 */
function findtacheById($id) {
    global $link;

    $sql = "select * from tache where tac_id=:id";
    $statement = $link->prepare($sql);
    $statement->execute([":id"=>$id]);
    return $statement->fetch();    
}

/**
 * liste des inscrit à la tache $le_id
 */
function listeInscrit($le_id) {
    global $link;

    $sql="select * from plannifier,client where pl_client=cl_id and pl_tache=:le_id";
    $statement = $link->prepare($sql);
    $statement->execute([":le_id"=>$le_id]);
    $data=$statement->fetchAll();        
    return $data;
}

/**
 * liste toutes les taches
 */
function findAlltache() {
    global $link;

    $sql="select * from tache ";
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
    $sql="select * from client where cl_nom like '$chercher%' and cl_id not in (select pl_client from plannifier where pl_tache=$le_id)";
    $result=$link->query($sql);
    $data=$result->fetchAll();

    return($data);
}


/**
 * 
 */