<?php
// Création de la classe livre (Le moule)
class Livre{
    
    // Les attributs
    private $titre;
    private $nbPages;
    private $dateParution;
    private $prix;
    private $auteur;

// Méthode magique (__construct) initialise l'objet à créer, toujours mettre les attributs dans l'ordre
public function __construct (Auteur $auteur, $titre, $nbPages, $dateParution, $prix){
    $this -> titre = $titre;
    $this -> nbPages = $nbPages;
    $this -> dateParution = $dateParution;
    $this -> prix = $prix;
    $this -> auteur = $auteur;
    $this -> auteur -> addLivre($this);
}

// Get -> getter est une méthode qui permet de récupérer un attribut de l’objet
public function getTitre(){
    return $this -> titre;
}

public function getNbPages(){
    return $this -> nbPages;
}

public function getDateParution(){
    return $this -> dateParution;
}

public function getPrix(){
    return $this -> prix;
}

public function __tostring(){
    return $this -> getTitre()." (".$this -> getDateParution().") : ".$this -> getNbPages()." pages / ".$this -> getPrix()." €<br>";
}

}




?>