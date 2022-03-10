<?php
include ('../Modele/Article.class.php');
// saisie utilisateur article 1
echo "SAISIE 1ER ARTICLE";
echo PHP_EOL;
$reference= (int)readline("entrez la référence de l'article: ");
$designation=  (string)readline("entrez la désignation de l'article: ");
$prixHT= (float)readline("entrez le prix HT: ");
echo PHP_EOL;
echo PHP_EOL;

// saisie utilisateur article 2
echo "SAISIE 2EME ARTICLE";
echo PHP_EOL;
$reference2= (int)readline("entrez la référence de l'article: ");
$designation2=  (string)readline("entrez la désignation de l'article: ");
$prixHT2= (float)readline("entrez le prix HT: ");

// instanciation 1er article
//!!!! il faut noter les paramettres ds le meme ordre que le constructeur!!!!!
$article1= new Article($reference, $designation, $prixHT);

//instanciation 2ème article
$article2= new Article($reference2, $designation2, $prixHT2);

//appel fonction pour article 1
echo "Article 1".PHP_EOL;
$article1 -> afficherArticle();
echo PHP_EOL;

//appel fonction pour article 2

echo "Article 2".PHP_EOL;
$article2 -> afficherArticle();
echo PHP_EOL;


?>