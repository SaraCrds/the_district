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
    $arr = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $arr;
}

// PLAT FUNCTION

function NomPlatIndex()
{
    $db= ConnectDB();
    $requete = $db->query("SELECT libelle, image, id FROM plat WHERE active = 'Yes' ORDER BY id  ASC LIMIT 9");
    $arr = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $arr;
}

    //// END FUNCTION FOR INDEX

    //// FUNCTION FOR MENU

// ID FUNCTION

function NomCatTitle()
{
    $db= ConnectDB();
    $requete = $db->query("SELECT libelle, id FROM categorie WHERE active = 'Yes' ORDER BY id");
    $arr = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $arr;
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
    WHERE categorie.id=:id AND categorie.active = 'Yes' AND plat.active='Yes' 
    ORDER BY plat.id ASC");
    $requete-> bindValue(":id", $id, PDO::PARAM_INT);
    $requete->execute();
    $arr = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $arr;
}

function CatDisplayAll() {
    $db= ConnectDB();
    $requete = $db->query("SELECT plat.libelle AS plat_libelle, plat.image, categorie.libelle, plat.id FROM categorie JOIN plat ON plat.id_categorie = categorie.id 
    WHERE categorie.active = 'Yes' AND plat.active='Yes' 
    ORDER BY categorie.id ASC, plat.id ASC
    LIMIT 6");
    $arr = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $arr;
}

    //// END FUNCTION FOR MENU

    //// FUNCTION FOR PLAT

    function PlatGetId() {
        $id = $_GET['id'];
        return $id;
    }

    function PlatDisplay($id) {
        $db= ConnectDB();
        $requete = $db->prepare("SELECT plat.libelle AS plat_libelle, plat.image, plat.description, plat.prix,
        categorie.libelle AS categorie_libelle, categorie.id AS id_cat
        FROM categorie JOIN plat ON plat.id_categorie = categorie.id 
        WHERE plat.id=:id;");
        $requete-> bindValue(":id", $id, PDO::PARAM_INT);
        $requete->execute();
        $arr = $requete->fetch(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $arr;
    }

    //// END FUNCTION FOR PLAT

    //// BEGIN CART FUNCTION

    function createCart(){
        if (!isset($_SESSION['shop'])){
           $_SESSION['shop']=array();
           $_SESSION['shop']['idplat'] = array();
           $_SESSION['shop']['qte'] = array();
           $_SESSION['shop']['prix'] = array();
        }
        return true;
     }

     function addPlat($idplat,$qte,$prix){
        if (createCart())
        {
           $plat = array_search($idplat,  $_SESSION['shop']['idplat']);
           if ($plat != false)
           {
              $_SESSION['shop']['qte'][$plat] += $qte ;
           }
           else
           {
              array_push( $_SESSION['shop']['idplat'],$idplat);
              array_push( $_SESSION['shop']['qte'],$qte);
              array_push( $_SESSION['shop']['prix'],$prix);
           }
        }
        else
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";
     }

    //// BEGIN ADMIN FUNCTION

    function AdminCat()
{
    $db= ConnectDB();
    $requete = $db->query("SELECT libelle, image, id, active FROM categorie ORDER BY id  ASC");
    $arr = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $arr;
}

    function AdminCatSpe($id)
    {
        $db= ConnectDB();
        $requete = $db->prepare("SELECT libelle, image, id, active FROM categorie WHERE id=:id");
        $requete-> bindValue(":id", $id, PDO::PARAM_INT);
        $requete->execute();
        $arr = $requete->fetch(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $arr;
    }

    function AdminPlat($id){
        $db= ConnectDB();
        $requete = $db->prepare("SELECT plat.libelle AS plat_libelle, plat.image AS plat_image, plat.id AS plat_id
        , plat.active AS plat_active, plat.prix AS plat_prix, plat.description AS plat_description FROM categorie JOIN plat ON plat.id_categorie = categorie.id 
        WHERE categorie.id=:id ORDER BY plat.id ASC");
        $requete-> bindValue(":id", $id, PDO::PARAM_INT);
        $requete->execute();
        $arr = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $arr;
    }

    function AdminActive() {
        $db= ConnectDB();
        $requete = $db->query("SELECT DISTINCT active FROM categorie ORDER BY id  ASC");
        $arr = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $arr;
    }

    function AdminPlatSpe($id)
    {
        $db= ConnectDB();
        $requete = $db->prepare("SELECT libelle, description, prix, image, id, active, id_categorie FROM plat WHERE id=:id");
        $requete-> bindValue(":id", $id, PDO::PARAM_INT);
        $requete->execute();
        $arr = $requete->fetch(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $arr;
    }

    function AdminCatSel() {
        $db= ConnectDB();
        $requete = $db->query("SELECT DISTINCT libelle, id FROM categorie ORDER BY id  ASC");
        $arr = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $arr;
    }

?>