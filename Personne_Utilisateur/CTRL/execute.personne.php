<?php
// mettre les require dans l'odre!!!
require '../Modele/personne.class.php';
require '../Modele/profil.class.php';
require '../Modele/utilisateur.class.php';


// création profils
$chefProjet = new Profil("Chef de projet", "CP");
$manager = new Profil("Manager", "MN");
$directeurProjet = new Profil("Directeur projet", "DP");
$directeurRH = new Profil("Directeur Ressource Humaine", "DRH");
$directeurGeneral = new Profil("Directeur Général", "DG");

// création utilisateurs avec différents profils métiers
$user1 = new Utilisateur("Drill", "Tom", "drill.tom@gmail.com", "06.01.02.03.04", 2350.25, $chefProjet, "user_DT_1", "dsoureri12", "Managing");
$user2 = new Utilisateur("Greyson", "Cyril", "greyson.cyril@gmail.com", "06.69.25.78.10", 2000, $manager, "user_GC_2", "krisiqud26", "Managing");
$user3 = new Utilisateur("Frid", "Elise", "frid.elise@gmail.com", "07.56.12.78.02", 2500.68, $directeurProjet, "user_FE_3", "xocignezu98", "Gestion projet");
$user4 = new Utilisateur("Zylo", "Gaelle", "zylo.gaelle@gmail.com", "06.69.47.01.87", 2400.10, $directeurRH, "user_ZG_4", "bfdoiremdi91", "Gestion personnel");
$user5 = new Utilisateur("Kilo", "Rent", "kilo.rent@gmail.com", "06.00.46.78.03", 3000, $directeurGeneral, "user_KR_5", "dsfoucenez85", "Direction");


// tableau pour lister utilisateurs
$list_user = [$user1, $user2, $user3, $user4, $user5];

// affichage liste des utilisateurs avec forEach
echo "****** Liste des utilisateurs *****" . PHP_EOL;
foreach ($list_user as $element) {
    echo $element->afficher();
}
echo PHP_EOL;

// affichage liste des managers avec forEach
echo "****** Liste des Managers *****" . PHP_EOL;
foreach ($list_user as $element) {
    // ds element d'utilisateur je vais chercher le profil d'utilisteur avec getProfil
    // ds lequelle je vais récupèrer le libelle du profil avec getLibelle
    if ($element->getProfil()->getLibelle() === "Manager") {
        echo $element->afficher();
    }
}
