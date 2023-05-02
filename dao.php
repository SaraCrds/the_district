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

function CatDisplay() {
    $db= ConnectDB();
    $id = $_GET["id"];
    $requete = $db->prepare("SELECT libelle, image FROM categorie JOIN plat ON plat.id_categorie = categorie.id WHERE categorie.id=? AND categorie.active = 'Yes';");
    $requete->execute(array($id));
    return $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
}

?>