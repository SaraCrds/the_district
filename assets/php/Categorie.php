<?php
class Categorie {
private $id;
public $nom;
public $image;
public $db;


public function __construct(\PDO $pdo, $id=0, $nom="", $image="") {
$this->db = $pdo;
$this->id = $id;
$this->libelle = $nom;
$this->image = $image;
}

public function NomCat()
{
    $requete = $this->db->query("SELECT libelle FROM categorie");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

public function ImgCat()
{
    return $this->image;
}

}

?>