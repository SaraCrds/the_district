<?php
require "../../../dao.php";

    // recuperation données
    $id_plat = (isset($_POST['idplat']) && $_POST['idplat'] != "") ? $_POST['idplat'] : Null;
    $prenom = (isset($_POST['prenom']) && $_POST['prenom'] != "") ? $_POST['prenom'] : Null;
    $nom = (isset($_POST['nom']) && $_POST['nom'] != "") ? $_POST['nom'] : Null;
    $mail = (isset($_POST['mail']) && $_POST['mail'] != "") ? $_POST['mail'] : Null;
    $tel = (isset($_POST['tel']) && $_POST['tel'] != "") ? $_POST['tel'] : Null;
    $adresse = (isset($_POST['adresse']) && $_POST['adresse'] != "") ? $_POST['adresse'] : Null;
    $price = (isset($_POST['price']) && $_POST['price'] != "") ? $_POST['price'] : Null;
    $qte = (isset($_POST['qte']) && $_POST['qte'] != "") ? $_POST['qte'] : Null;

    // renvoie vers le formulaire si pas bien rempli
    if ($id_plat == Null || $prenom == Null || $nom == Null || $mail == Null || $tel == Null || $adresse == Null  || $price == Null  || $qte == Null) {
        header("Location: ../../../plat.php?id=" . $id_plat);
        exit;
    }

    $nomprenom =  $nom . " " . $prenom ;
    $total = $price * $qte ; 
    $etat = "En préparation";
    $date =  date("Y-m-d H:i:s");

    $messagemail= "Votre commande du " . $date . " a bien été envoyé.";
    $aHeaders = array('MIME-Version' => '1.0',
    'Content-Type' => 'text/html; charset=utf-8',
    'From' => 'The District <contact@thedistric.com>',
    'X-Mailer' => 'PHP/' . phpversion()
    );

    // 
    $db = ConnectDB();


try {
    // Construction de la requête INSERT sans injection SQL :
    $requete = $db->prepare("INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client) 
    VALUES (:idplat, :qte, :total, :date, :etat, :nom, :tel, :mail, :adresse);");

    // Association des valeurs aux paramètres via bindValue() :
    $requete->bindValue(":idplat", $id_plat, PDO::PARAM_INT);
    $requete->bindValue(":qte", $qte, PDO::PARAM_INT);
    $requete->bindValue(":total", $total, PDO::PARAM_INT);
    $requete->bindValue(":date", $date , PDO::PARAM_STR);
    $requete->bindValue(":etat", $etat, PDO::PARAM_STR);
    $requete->bindValue(":nom", $nomprenom, PDO::PARAM_STR);
    $requete->bindValue(":tel", $tel, PDO::PARAM_STR);
    $requete->bindValue(":mail", $mail, PDO::PARAM_STR);
    $requete->bindValue(":adresse", $adresse, PDO::PARAM_STR);

    // Lancement de la requête :
    $requete->execute();

    // Libération de la requête (utile pour lancer d'autres requêtes par la suite) :
    $requete->closeCursor();

    mail($mail, "Votre commande a été envoyé", $messagemail, $aHeaders);
}

// Gestion des erreurs
catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script");
}

// Si OK: redirection vers la page artists.php
header("Location: ../../../plat.php?id=" . $id_plat);

// Fermeture du script
exit;
?>