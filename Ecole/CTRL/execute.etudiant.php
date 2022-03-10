<?php
include '../Modele/etudiant.class.php';

$filiereInformatique = new Filiere("informatique");
$filiereInfoCom = new Filiere("techno info com ");
$filiereGenieCivil = new Filiere("genie civil");
$etudiant1 = new Etudiant("Vladimir", "Sergei", "07/10/1918", $filiereInformatique);
$etudiant2 = new Etudiant("Jacky", "Michel", "09/02/1980", $filiereInfoCom);
$etudiant3 = new Etudiant("Michel", "Blanc", "02/03/1945", $filiereInfoCom);
$etudiant4 = new Etudiant("Nicolas", "Tesla", "08/05/1965", $filiereInformatique);
$etudiant5 = new Etudiant("Bernard", "Lavillier", "08/06/1975", $filiereGenieCivil);

echo "Liste des filières de notre école: " . PHP_EOL;
echo $filiereInformatique . PHP_EOL;
echo $filiereInfoCom . PHP_EOL;
echo $filiereGenieCivil . PHP_EOL;
echo PHP_EOL;

echo "Liste étudiants par filière: " . PHP_EOL;
echo "***** Filière Informatique *****" . PHP_EOL;
echo $etudiant1 . PHP_EOL;
echo $etudiant4 . PHP_EOL;
echo PHP_EOL;

echo "***** Filière Techno de l'info et de la communication *****" . PHP_EOL;
echo $etudiant2 . PHP_EOL;
echo $etudiant3 . PHP_EOL;
echo PHP_EOL;

echo "***** Filière Génie civil *****" . PHP_EOL;
echo $etudiant5 . PHP_EOL;
echo PHP_EOL;
