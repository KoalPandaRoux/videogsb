<?php
session_start();


//Permet de supprimer les variables de la session
$_SESSION = array();
session_destroy();



//Suppression des cookies
setcookie('login', '');
setcookie('pass_hache', '');

header('location:index.php');





 ?>
