<?php
require "../../../dao.php";

$nom = (isset($_POST['nom']) && $_POST['nom'] != "") ? $_POST['nom'] : Null;
$prenom = (isset($_POST['prenom']) && $_POST['prenom'] != "") ? $_POST['prenom'] : Null;
$mail = (isset($_POST['mail']) && $_POST['mail'] != "") ? $_POST['mail'] : Null;
$pssword = (isset($_POST['password']) && $_POST['password'] != "") ? $_POST['password'] : Null;

if ($nom == Null || $prenom == Null || $mail == Null || $pssword == Null) {
    header("Location: ../../../inscription.php");
    exit();
}

$db = ConnectDB();
$password_hash = password_hash($pssword, PASSWORD_DEFAULT);

try {
    $requete = $db->prepare("INSERT INTO utilisateur (nom_prenom, email, password) 
    VALUES (:nom_prenom, :email, :password);");

    // Association des valeurs aux paramètres via bindValue() :
    $requete->bindValue(":nom_prenom", $nom . " " . $prenom , PDO::PARAM_STR);
    $requete->bindValue(":email", $mail, PDO::PARAM_STR);
    $requete->bindValue(":password", $password_hash, PDO::PARAM_STR);

    // Lancement de la requête :
    $requete->execute();

    // Libération de la requête (utile pour lancer d'autres requêtes par la suite) :
    $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {
    header("Location: ../../../inscription.php");
    exit();
}

// Si OK: redirection vers la page artists.php
header("Location: ../../../index.php");

// Fermeture du script
exit;
?>

<!-- $requete = $db->prepare("SELECT password FROM utilisateur WHERE email=? LIMIT 1;");
$requete-> execute(array($mail));
$requete->execute();
$arr = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

if(count($arr)>0 && $arr!=Null ){
    if(!password_verify($pssword, $arr[0])){
        $_SESSION["login"];
        echo "erreur2";
        exit();
    }
    else {
        echo "erreur3";
        exit();
    }
}

else {
    header("Location: ../../../login.php");
    exit();
}

    ?> -->