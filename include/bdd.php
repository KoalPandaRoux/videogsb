<?php			
session_start();

//Le try et le catch vont nous permettre de tester si on se connecte bien à la base de données
try{
	// Connexion base de données sous Wampp
	$bdd = new PDO('mysql:host=localhost; dbname=video-gsb; charset=utf8', 'root', '');
}
	catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>
