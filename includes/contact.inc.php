<h1>Nous contacter</h1>
<?php

if(isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $msg = checkInput($_POST['msg']);

$erreur = array();

if ($nom === "")
  array_push($erreur, "Veuillez saisir votre nom");
if ($prenom === "")
  array_push($erreur, "Veuillez saisir votre prenom");
if ($mail === "")
  array_push($erreur, "Veuillez saisir votre mail");
if ($msg === "")
  array_push($erreur, "Veuillez saisir votre msg");

if(count($erreur) > 0){
  $message = '<ul>';

for($i = 0 ; $i < count($erreur) ; $i++) {
  $message .= '<li>';
  $message .= $erreur[$i];
  $message .= '</li>';

}

  $message .= '</ul>';

  echo $message;

  require 'frmContact.php';
}

else {
  echo "insertion en BDD";
}
}
else {
  require 'frmContact.php';
}
