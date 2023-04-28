<?php

// CONNECT DATABASE
include_once("db.php");
$db= ConnectDB();

    //// FUNCTION FOR INDEX

// CAT FUNCTION

function NomCatIndex()
{
    $db= ConnectDB();
    $requete = $db->query("SELECT libelle FROM categorie");
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

?>