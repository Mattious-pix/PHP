<?php

//echo "Hello Michel";

// commentaire sur une ligne
/*
*commentaire sur plusieurs lignes
*/
//$msgImportant = "<h2>Message cretin</h2>";
//$toto ="<h1>Hello Michel</h1>";

//concaténation
//$toto = "<h1>";
//$toto = $toto . "Hello Michel";
//$toto = $toto . "</h1>";

// marche aussi avec des chiffres

//$truc = 10;
//$truc =$truc * 2;
// pour les puissances ** = puissance



//echo $toto;
//§echo $truc;

// boucle for
//$display = "<ul>";

//for ($i = 0 ; $i <= 1000 ; $i++) {
//  if ($i % 2 == 0 && $i % 5 == 0) {
//    $display =$display . "<li>" . $i . "</li>";
//  }
// }

//$display = $display . "</ul>";

//echo $display;
//$i++ => $i + 1 affichera les chiffres de 0 à 10000
//$compteur = 0;
//$play = "<ul>";
//for ($i = -1273; $i < 4628; $i += 7) {
 //if ($i % 3 == 0) {
    //$play = $play . "<li>" . $i . "</li>";
    //$compteur++;
 //}
//}
//$play = $play ."<ul>";

//echo "<p>Le nombre de resultat est $compteur</p>";
//echo $play;

//pour faire afficher les fichiers require => copier coller
require_once "./includes/html.php";
require_once "./includes/header.php";
require_once "./includes/main.php";
require_once "./includes/footer.php";
// ou alors on peut utiliser includes => verifie les erreurs
//include"./includes/html.php;
