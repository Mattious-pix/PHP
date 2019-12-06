<main>
  <?php
  //$page = isset($_GET['page']) : 'accueil';
//veut dire la même chose que en dessous cela permet d'obtenir l'url de la page au survole des liens (s'affiche en bas à droite)
   if (isset($_GET['page'])) {
     $page = $_GET['page'];
   }
  else {
    $page = 'accueil';
  }

  $liste = glob("./includes/*.inc.php");
  //var_dump($liste);
  $page = "./includes/" . $page . ".inc.php";

  if (in_array($page, $liste)) {
    require $page;
  }
  else {
    require "./includes/accueil.inc.php";
  }

  //  require './includes/' . $page . '.php';
   ?>

</main>
