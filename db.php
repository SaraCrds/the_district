<?php
function ConnectDB() {

    $servername = "localhost";
    $username = "root";
    $password = "PepiCovid6";
    $dbname = "the_district";
    
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // configurer le mode d'erreur PDO pour générer des exceptions
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connecté avec succès à la base de données";
    } 
    
    catch(PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
    return $pdo;
}

?>