	<?php 
	//include bdd
	include('include/bdd.php');

	
	//include head
	include('include/head.php');  
	//include navigation
	include('include/navigation.php');
	include('control_sessions.php');
	if (controlAdmin(	$_SESSION['type_utilisateur']) == TRUE)
	{}
	else{header('Location: error/404.php');}

	?>

<h2>Votre profil	</h2>
<?php 
	echo '<p>Vous êtes connecté en tant que'.' '.$_SESSION['login'].'</br>'.'Galaxy Swiss Bouridn vous souhaite la bienvenue </p>';


 ?>

	<div class="container lien-gestion">
		<a href="gestion_utilisateurs.php">Gestion des Utilisateurs</a><br>
		<a href="gestion_videos.php">Gestion des Vidéos</a>
	</div>




<!--FOOTER-->
<?php include('include/footer.php');  ?>
