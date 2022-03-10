<?php
include ('../Modele/Rectangle.class.php');
//déclare les variables pour la saisie utilisateur
$longueur= (int)readline("saisir la longeur: ");
$largeur= (int)readline("saisir la largeur: ");

//instancier l'objet
$rect1 = new Rectangle($longueur, $largeur);
$rect1->afficherRectangle();
?>