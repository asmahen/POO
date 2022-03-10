<?php
include '../Modele/compte.class.php';


// créer un compte et afficher détails

echo " COMPTE 1: ".PHP_EOL;
echo "**********************".PHP_EOL;
$compte1= new Compte("PFU00454","Capron","Camille","0659874521","0");
$compte1 -> afficherResumeCpt();
echo PHP_EOL;
echo "**********************".PHP_EOL;


// créditer compte1 et afficher le résumé

$somme= readline('saisir la somme à ajouter: ').PHP_EOL;
$compte1-> crediter($somme);
echo "**********************".PHP_EOL;
$compte1 -> afficherResumeCpt();
echo "**********************".PHP_EOL;


// débiter compte1 et afficher le résumé

$somme= readline("saisir la somme à retirer: ").PHP_EOL;
$compte1 -> debiter($somme);
echo "**********************".PHP_EOL;
$compte1 -> afficherResumeCpt();
echo "**********************".PHP_EOL;
echo PHP_EOL;


// créer 2ème compte et afficher le détail

echo " COMPTE 2: ".PHP_EOL;
echo "**********************".PHP_EOL;
$compte2= new Compte("GAF25599", "Gallois", "Mathieu", "0648952012", "0");
$compte2-> afficherResumeCpt();
echo "**********************".PHP_EOL;


// créditer compte 2 à partir du compte 1

echo "Créditer le compte 2 à partir du compte 1 ".PHP_EOL;
$somme= readline('saisir le montant à déposer: ').PHP_EOL;
$compte2-> crediterCpt($somme, $compte1);


//affichage des comptes mis à jour

echo "*******COMPTE 1********".PHP_EOL;
echo PHP_EOL;
$compte1-> afficherResumeCpt();
echo "*******COMPTE 2********".PHP_EOL;
echo PHP_EOL;
$compte2 -> afficherResumeCpt();
echo "**********************".PHP_EOL;


// débiter le compte 2 et créditer le compte 1
echo 'débiter le compte 2 pour créditer compte 1'.PHP_EOL;
$somme= readline('saisir le montant à débiter: ').PHP_EOL;
$compte2-> debiterCpt($somme,$compte1);


//affichage des comptes mis à jour

echo "*******COMPTE 1********".PHP_EOL;
echo PHP_EOL;
$compte1-> afficherResumeCpt();
echo "*******COMPTE 2********".PHP_EOL;
echo PHP_EOL;
$compte2 -> afficherResumeCpt();
echo "**********************".PHP_EOL;


// afficher le nombre de comptes créés

echo " NOMBRE DE COMPTE CREES ".PHP_EOL;
echo PHP_EOL;
$compte1-> afficherNbCompte();
echo PHP_EOL;



?>