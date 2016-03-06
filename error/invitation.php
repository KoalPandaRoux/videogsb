<?php
//include bdd
include('../include/bdd.php');
//include head
include('../include/head.php');
//include navigation
include('../include/navigation.php');
?>

<h2>Bienvenue sur GSB Vidéo, vous êtes maintenant inscrit!</h2>
<p>Vous pouvez dès a présent vous connectez.</p>
<p>Pour les demandes d'upload de vidéo merci de soumettre votre demande via la page contact.</p>
<p>Vous allez être redirigé dans quelques secondes...</p>
<?php

$timeConnect = 3;
$urlConnect = 'url=http://localhost/videogsb/login.php';
//error
header("Refresh:$timeConnect; $urlConnect");

//include footer
include('../include/footer.php');
