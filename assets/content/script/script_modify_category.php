<?php
require "../../../dao.php";
    // recuperation données
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $libelle = (isset($_POST['libelle']) && $_POST['libelle'] != "") ? $_POST['libelle'] : Null;
    $picture = (isset($_POST['picture']) && $_POST['picture'] != "") ? $_POST['picture'] : Null;
    $active = (isset($_POST['active']) && $_POST['active'] != "") ? $_POST['active'] : Null;

    // recuperation image
    $uploads_dir = '../../../assets/img/category';
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
    if ($libelle == Null || $active == Null) {
        header("Location: ../../../cat_modify.php?id=" . $id);
        exit;
    }

    try {
        UpdateCat($libelle, $picture, $active, $id);
       }

       catch (Exception $e) {
        die("Fin du script");
    }

    // Si OK: redirection vers la page artist_detail.php
    header("Location: ../../../cat_modify.php?id=" . $id);
    exit;

    ?>