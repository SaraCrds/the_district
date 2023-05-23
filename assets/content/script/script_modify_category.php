<?php
require "../../../dao.php";
    // recuperation données
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $libelle = (isset($_POST['libelle']) && $_POST['libelle'] != "") ? $_POST['libelle'] : Null;
    $picture = (isset($_POST['picture']) && $_POST['picture'] != "") ? $_POST['picture'] : Null;
    $active = (isset($_POST['active']) && $_POST['active'] != "") ? $_POST['active'] : Null;

    // recuperation image
    $uploads_dir = '../../../the_district/assets/img/category';
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
        header("Location: cat_modify.php?id=" . $id);
        exit;
    }

    require "../../../db.php"; 
    $db = ConnectDB();

    if ($picture == Null) {
        try {
            $requete = $db->prepare("UPDATE category SET libelle = :libelle, active = :active WHERE id = :id;"); 
            $requete->bindValue(":libelle", $libelle, PDO::PARAM_STR);
            $requete->bindValue(":active", $active, PDO::PARAM_STR);
            $requete->bindValue(":id", $id, PDO::PARAM_INT);
    
               $requete->execute();
               $requete->closeCursor();
           }

           catch (Exception $e) {
            echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
            die("Fin du script (script_category_modify)");
        }
       
    }

    else {
        try {
            $requete = $db->prepare("UPDATE category SET libelle = :libelle, image = :picture, active = :active WHERE id = :id;"); 
            $requete->bindValue(":libelle", $libelle, PDO::PARAM_STR);
            $requete->bindValue(":image", $picture, PDO::PARAM_STR);
            $requete->bindValue(":active", $active, PDO::PARAM_STR);
            $requete->bindValue(":id", $id, PDO::PARAM_INT);
    
               $requete->execute();
               $requete->closeCursor();
           }

           catch (Exception $e) {
            echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
            die("Fin du script (script_category_modify)");
        }
       
    }

    // Si OK: redirection vers la page artist_detail.php
    header("Location: cat_modify.php?id=" . $id);
    exit;

    ?>