<?php 
session_start();


//Permet de rester connecter sur tout le site grâce aux variables $_SESSION
if (isset($_SESSION['login']))
{
	echo '<a href="deconnexion.php"><div class="btn-login">Se deconneceter</div></a>'.' '.$_SESSION['login'];
}


 ?>