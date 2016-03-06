	<?php 
	//include bdd
	include('include/bdd.php');
	//include head
	include('include/head.php');  
	//include navigation
	include('include/navigation.php'); 
	?>


			<form class="form" action="post_login.php" method="POST">

				<h2>Formulaire de connexion</h2>

				<input type="text" placeholder="Login" maxlength="30" name="login"/><br>

				<input type="password" placeholder="Password" maxlength="30" name="password"/><br>

				<button class="input-envoyer" type="submit" name="envoyer">Se Connecter</button> 
			</form>
		<?php
		if($_SESSION===['login']) {
			echo $_SESSION['login'] . '<p>yo</p>';

		}
		?>
	<!--FOOTER-->
<?php include('include/footer.php');  ?>
