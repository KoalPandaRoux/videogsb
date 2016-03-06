	<?php
	//include bdd
	include('include/bdd.php');
	//include head
	include('include/head.php');
	//include navigation
	include('include/navigation.php');

	?>

	<form class="form" action="post_inscription.php" method="POST">
		<h2>Formulaire d'inscription</h2>

		<input type="text" placeholder="Entrer un login" maxlength="25" name="login" required="required"><br>

		<input type="text" placeholder="Entrer votre prénom" maxlength="35" name="prenom" required="required"><br>

		<input type="text" placeholder="Entrer votre nom" maxlength="35" name="nom" required="required"><br>

		<input type="password" placeholder="Entrer un mot de passe" maxlength="25" name="password" required="required"><br>

		<input type="email" placeholder="Entrer un email" maxlength="100" name="email" required="required"><br>

		<input placeholder="Entrer une date de naissance" type="date" name="date_de_naissance" required="required"><br>


		<button class="input-envoyer" type="submit" name="envoyer">Soumettre votre demande</button>
	</form>


	<!--FOOTER-->
<?php include('include/footer.php');  ?>
