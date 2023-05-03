<?php

// CONNECT DATABASE
include_once("db.php");
$db= ConnectDB();

    //// FUNCTION FOR INDEX

// CAT FUNCTION

function NomCatIndex()
{
    $db= ConnectDB();
    $requete = $db->query("SELECT libelle, image, id FROM categorie WHERE active = 'Yes' ORDER BY id  ASC LIMIT 4");
    return $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
}

// PLAT FUNCTION

function NomPlatIndex()
{
    $db= ConnectDB();
    $requete = $db->query("SELECT libelle, image, id FROM plat WHERE active = 'Yes' ORDER BY id  ASC LIMIT 9");
    return $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
}

    //// END FUNCTION FOR INDEX

    //// FUNCTION FOR MENU

// ID FUNCTION

function NomCatTitle()
{
    $db= ConnectDB();
    $requete = $db->query("SELECT libelle, id FROM categorie WHERE active = 'Yes' ORDER BY id");
    return $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
}

function CatGetId() {
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    }
    else{
    $id = Null; }
    return $id;
}

function CatDisplaySpe($id) {
    $db= ConnectDB();
    $requete = $db->prepare("SELECT plat.libelle AS plat_libelle, plat.image, categorie.libelle, plat.id FROM categorie JOIN plat ON plat.id_categorie = categorie.id 
    WHERE categorie.id=? AND categorie.active = 'Yes' AND plat.active='Yes' 
    ORDER BY plat.id ASC");
    $requete->execute(array($id));
    return $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
}

function CatDisplayAll() {
    $db= ConnectDB();
    $requete = $db->query("SELECT plat.libelle AS plat_libelle, plat.image, categorie.libelle, plat.id FROM categorie JOIN plat ON plat.id_categorie = categorie.id 
    WHERE categorie.active = 'Yes' AND plat.active='Yes' 
    ORDER BY categorie.id ASC, plat.id ASC
    LIMIT 6");
    return $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
}


?>