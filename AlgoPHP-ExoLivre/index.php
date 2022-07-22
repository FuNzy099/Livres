<?php
// liens entres les fichiers
    include "Livre.php";
    include "Auteur.php";
 
// Affichage de l'auteur
$auteur = new Auteur ("KING", "Stephen", "1947-02-21");
$auteur1 = new Auteur ("MINIER", "Bernard", "1960-08-26");

// Affichage de la biblio de l'auteur
$livre = new Livre ($auteur, "Ca", 1138, 1986, 20);
$livre = new Livre ($auteur, "Simetierre", 374, 1983, 15);
$livre = new Livre ($auteur, "Le Fléau", 823, 1978, 14);
$livre = new Livre ($auteur, "Shinning", 447, 1977, 16);

$livre = new Livre ($auteur1, "Glacé", 560, 2011, 20);
$livre = new Livre ($auteur1, "Le cercle", 572, 2012, 20);
$livre = new Livre ($auteur1, "N'éteint pas la lumière", 616, 2014, 21);
$livre = new Livre ($auteur1, "Une putain d'histoire", 524, 2015, 21);

$auteur  -> afficherBibliographie();


?>