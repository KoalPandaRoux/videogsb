<?php
//BDD
include('include/bdd.php');

$login = $_POST['login'];
$password = $_POST['password'];

//mot de passe haché
$pass_hache = sha1($_POST['password']);


//vérification des identifiants
$req = $bdd -> prepare('' . 'SELECT * FROM utilisateur WHERE login = :login AND password = :password');
$req -> execute(array(
		'login' => $login,
		'password' => $pass_hache));

$result = $req -> fetch();

//si le résultat est différent on envoi un mauvais identifiant

if(!$result)
{
	echo $result;
	header('location : error/404.php');
}

//sinon vous êtes connecté
else{
	session_start();
	$_SESSION['id_utilisateur'] = $result['id_utilisateur'];
	$_SESSION['login'] = $login;
	$_SESSION['type_utilisateur'] = $result['id_type_utilisateur'];
	$_SESSION['password'] = $result['password'];
	header("location: index.php");
}


 ?>
