<?php
//include bdd
include('/include/bdd.php');
//include head
include('/include/head.php');
//include navigation
include('/include/navigation.php');
?>

   <h2>Oups !</h2>
  <p>Mauvais identifiant ou mot de passe.</p>
  <p>Vous allez être redirigé dans quelques secondes...</p>

<?php

$timeConnect = 3;
$urlConnect = 'url=http://localhost/videogsb/login.php';
//error
header("Refresh:$timeConnect; $urlConnect");

//include footer
include('../include/footer.php');

