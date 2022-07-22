<?php
// Création de la classe Auteur (Le moule)
class Auteur {
    private $nom;
    private $prenom;
    private $dateDeNaissance;
    private $bibliographie = [];

// Méthode magique (__construct) initialise l'objet à créer, toujours mettre les attributs dans l'ordre
public function __construct ($nom, $prenom, $dateDeNaissance){
    $this -> nom = $nom;
    $this -> prenom = $prenom;
    $this -> dateDeNaissance = $dateDeNaissance;
    $this -> bibliographie = [];
}

// Get -> getter est une méthode qui permet de récupérer un attribut de l’objet
public function getNom(){
    return $this -> nom;
}

public function getPrenom(){
    return $this -> prenom;
}
// Function pour calculer l'age de l'auteur
public function getDateDeNaissance(){
    return $this -> dateDeNaissance;
}

public function getage(){
    $dateActuel = new DateTime();
    $date2 = new Datetime ($this -> dateDeNaissance);
    $age = $dateActuel -> diff($date2);
    return $age -> format("%y ans");
}

// Set -> est une méthode qui permettra la modification d'un attribut
public function setBibliographie($bibliographie){
    $this -> bibliographie = $bibliographie;
}

public function getBibliographie(){
    return $this -> bibliographie = [];
}

public function addLivre( Livre $livre){
    $this -> bibliographie[] = $livre;
}

// Boucle foreach dans le but d'afficher chaques livres de l'auteur 
public function afficherBibliographie(){
   echo"Les livres de: ".
           $this -> getPrenom()." ".
           $this -> getNom().", ". 
           $this -> getAge()."<br> ---------------------------------------------- <br>";

    foreach ($this -> bibliographie as $val) {
        echo $val ; 

     }
}

}

?>