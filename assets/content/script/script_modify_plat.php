<?php
require "../../../dao.php";
    // recuperation données
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $libelle = (isset($_POST['libelle']) && $_POST['libelle'] != "") ? $_POST['libelle'] : Null;
    $image = (isset($_POST['picture']) && $_POST['picture'] != "") ? $_POST['picture'] : Null;
    $active = (isset($_POST['active']) && $_POST['active'] != "") ? $_POST['active'] : Null;
    $desc = (isset($_POST['desc']) && $_POST['desc'] != "") ? $_POST['desc'] : Null;
    $prix = (isset($_POST['prix']) && $_POST['prix'] != "") ? $_POST['prix'] : Null;
    $idcat = (isset($_POST['categorie']) && $_POST['categorie'] != "") ? $_POST['categorie'] : Null;

    // recuperation image
    $uploads_dir = '../../../the_district/assets/img/food';
    if ($_FILES["picture"]["error"] != 0) { 
        $picture = Null;
     } 
    else {
        $allowed = array('gif', 'png', 'jpg', 'jpeg');
        $picture = $_FILES['picture']['name'];
        $ext = pathinfo($picture, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            $picture = Null;
        }
        else
        {
            move_uploaded_file($_FILES["picture"]["tmp_name"], "$uploads_dir/$picture");   
        } 
    }

    // renvoie vers le formulaire si pas bien rempli
    if ($libelle == Null || $active == Null || $desc == Null || $prix == Null || $idcat == Null) {
        header("Location: ../../../plat_modify.php?id=" . $id);
        exit;
    }

    try {
        UpdatePlat($libelle, $picture, $active, $id, $prix, $desc, $idcat);
       }

    catch (Exception $e) {
     die("Fin du script (script_plat_modify)");
    }

    // Si OK: redirection vers la page artist_detail.php
    header("Location: ../../../plat_modify.php?id=" . $id);
    exit;

    ?>