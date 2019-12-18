<?php
/**
 * requete pour désinscrire un client à une leçon
 */
function desincrire($le_id,$cl_id) {
    global $link;

    $sql="delete from plannifier where pl_categorie=:le_id and pl_client=:cl_id";
    $statement = $link->prepare($sql);
    $statement->execute([":le_id"=>$le_id,":cl_id"=>$cl_id]);
}

/**
 * insert une nouvelle leçon
 */
function insertcategorie($option) {    
    global $link;

    $sql = "insert into categorie values (null,:cat_label )";
    $statement = $link->prepare($sql);        
    $statement->execute($option); 
}

/**
 * Maj d'une leçon
 */
function updatecategorie($option,$cat_id) {
    global $link;

    $sql = "update categorie set cat_label= :cat_label where cat_id=:cat_id";
    $statement = $link->prepare($sql);
    $option[":cat_id"]=$cat_id;
    $statement->execute($option); 
}

/**
 * 
 */
function findcategorieById($id) {
    global $link;

    $sql = "select * from categorie where cat_id=:id";
    $statement = $link->prepare($sql);
    $statement->execute([":id"=>$id]);
    return $statement->fetch();    
}

/**
 * liste des inscrit à la categorie $le_id
 */
function listeInscrit($le_id) {
    global $link;

    $sql="select * from plannifier,client where pl_client=cl_id and pl_categorie=:le_id";
    $statement = $link->prepare($sql);
    $statement->execute([":le_id"=>$le_id]);
    $data=$statement->fetchAll();        
    return $data;
}

/**
 * liste toutes les categories
 */
function findAllcategorie() {
    global $link;

    $sql="select * from categorie ";
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
    $sql="select * from client where cl_nom like '$chercher%' and cl_id not in (select pl_client from plannifier where pl_categorie=$le_id)";
    $result=$link->query($sql);
    $data=$result->fetchAll();

    return($data);
}


/**
 * 
 */