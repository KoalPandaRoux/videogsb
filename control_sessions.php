<?php

function controlAdmin ($typeUser) {

  try{
  	// Connexion base de données sous Wampp
  	$bdd = new PDO('mysql:host=localhost; dbname=video-gsb; charset=utf8', 'root', '');
  }
  	catch (Exception $e)
  {
          die('Erreur : ' . $e->getMessage());
  }


if (!empty($bdd)) {
    $resultat = $bdd -> query('SELECT libelle FROM type_utilisateur WHERE id_type_utilisateur="'.$typeUser.'"');
}

$data = $resultat-> fetch();

if (!empty($data['libelle'] == 'administrateur') or !empty($data['libelle'] =='super_utilisateur' )) {
  return TRUE;
}else{
  return FALSE;
}
}


if (controlAdmin(	$_SESSION['type_utilisateur']) == TRUE){

} else {
  header('location: error/redirection_error.php');
}




 ?>
