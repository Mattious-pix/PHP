<?php

if (isset(£POST['frminscription'])){
  $mail = checkInput($_POST['mail']);
  $pwd = checkInput($_POST['pwd']);

}

else{
  require 'frminscription.php';
}
