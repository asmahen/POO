<?php
include"../Modele/Livre.class.php";

//saisie utilisateur pour livre 1
$titre= (string)readline("Entrez le titre du livre: ");
$auteur= (string)readline("Entrez le nom complet de l'auteur (Nom Prénom): ");
$prix= (float)readline("Entrez le prix: ");

//instancier le livre 1
$livre1= new Livre($titre, $auteur, $prix);

echo PHP_EOL;
echo "Saisie livre 2:".PHP_EOL;
//saisie utilisateur pour livre 2
$titre2= (string)readline("Entrez le titre du livre: ");
$auteur2= (string)readline("Entrez le nom complet de l'auteur (Nom Prénom): ");
$prix2= (float)readline("Entrez le prix: ");

//instancier livre 2
$livre2= new Livre($titre2, $auteur2, $prix2);

echo "livre 1: ".PHP_EOL;
//appele de fonction pour livre1
$livre1 -> afficher();
echo PHP_EOL;

echo "livre 2: ".PHP_EOL;
//appele de fonction pour livre2
$livre2 -> afficher();
echo PHP_EOL;
?>