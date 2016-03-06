<?php
//include bdd
include('../include/bdd.php');
//include head
include('../include/head.php');
//include navigation
include('../include/navigation.php');
?>

  <h2>Transfert</h2>
  <p>Le transfert vidéo c'est bien déroulé.</p>
  <p>Vous allez être redirigé dans quelques secondes...</p>
<?php

$timeConnect = 3;
$urlConnect = 'url=http://localhost/videogsb/affichage_video.php';

header("Refresh:$timeConnect; $urlConnect");

//include footer
include('../include/footer.php');

