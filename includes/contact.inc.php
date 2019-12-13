<<<<<<< HEAD
<h1>Pour nous contacter</h1>
<?php
if (isset($_POST['frmContact'])) {
=======
<h1>Nous contacter</h1>
<?php

if(isset($_POST['frmContact'])) {
>>>>>>> 5065a9469fd0f96c78e0af878b12c0d2e1971835
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $msg = checkInput($_POST['msg']);
<<<<<<< HEAD
  $erreur = array();
  if ($nom === "")
    array_push($erreur, "Veuillez saisir votre nom");
  if ($prenom === "")
    array_push($erreur, "Veuillez saisir un prénom");
  if ($mail === "")
    array_push($erreur, "Veuillez saisir une adresse mail");
  if ($msg === "")
    array_push($erreur, "Veuillez saisir un message");
  if (count($erreur) > 0) {
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
    $sqlVerif = "SELECT COUNT(*) FROM clients
    WHERE mail='" . $mail ."'";
    $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();
    if ($nbrOccurences > 0) {
      echo "Déjà dans la base";
    }
    else {
        $sql = "INSERT INTO clients
        (nom, prenom, mail, message)
        VALUES ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $msg ."')";
        $query = $pdo->prepare($sql);
        $query->bindValue('nom', $nom, PDO::PARAM_STR);
        $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue('mail', $mail, PDO::PARAM_STR);
        $query->bindValue('message', $msg, PDO::PARAM_STR);
        $query->execute();
        echo "Enregistrement OK";
      }
  }
}
else {
  $nom = $prenom = $mail = $msg = "";
  require 'frmContact.php';
}<h1>Pour nous contacter</h1>
<?php
if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $msg = checkInput($_POST['msg']);
  $erreur = array();
  if ($nom === "")
    array_push($erreur, "Veuillez saisir votre nom");
  if ($prenom === "")
    array_push($erreur, "Veuillez saisir un prénom");
  if ($mail === "")
    array_push($erreur, "Veuillez saisir une adresse mail");
  if ($msg === "")
    array_push($erreur, "Veuillez saisir un message");
  if (count($erreur) > 0) {
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
    $sqlVerif = "SELECT COUNT(*) FROM clients
    WHERE mail='" . $mail ."'";
    $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();
    if ($nbrOccurences > 0) {
      echo "Déjà dans la base";
    }
    else {
        $sql = "INSERT INTO clients
        (nom, prenom, mail, message)
        VALUES ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $msg ."')";
        $query = $pdo->prepare($sql);
        $query->bindValue('nom', $nom, PDO::PARAM_STR);
        $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue('mail', $mail, PDO::PARAM_STR);
        $query->bindValue('message', $msg, PDO::PARAM_STR);
        $query->execute();
        echo "Enregistrement OK";
      }
  }
}
else {
  $nom = $prenom = $mail = $msg = "";
=======

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

>>>>>>> 5065a9469fd0f96c78e0af878b12c0d2e1971835
  require 'frmContact.php';
}

else {
  echo "insertion en BDD";
}
}
else {
  require 'frmContact.php';
}
