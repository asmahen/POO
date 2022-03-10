<?php
include "../MODELE/point.class.php";
$abs = readline("entrez l'abcisse: ");
$ord = readline("entrez l'ordone: ");
$pt1 = new Point ($abs,$ord);
echo $pt1->Norme($abs,$ord);
?>