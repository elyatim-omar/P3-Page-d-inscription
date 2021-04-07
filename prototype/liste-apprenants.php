<?php 
require("apprenant.php");
$liste_apprenants = [];

$apprenant = new apprenant;
 $apprenant->Nom = "el yatim";
 $apprenant->Prenom = "omar";
 $liste_apprenants[] = $apprenant ;

 $apprenant = new apprenant;
 $apprenant->Nom = "bouchlouch";
 $apprenant->Prenom = "yassin";
 $liste_apprenants[] = $apprenant ;

 $apprenant = new apprenant;
 $apprenant->Nom = "boughaba";
 $apprenant->Prenom = "khaled";
 $liste_apprenants[] = $apprenant ;

 $liste_apprenants_json =  json_encode($liste_apprenants);

 echo $liste_apprenants_json;
 ?>