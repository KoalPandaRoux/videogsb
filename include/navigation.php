<body>

<header>
		<div class="sec-connexion">
			<!--<form method="GET" action="rechercher.php" >
				<input class="search" type="search" placeholder="Entrer votre recherche">
				<input class="input-search" type="submit" value="Ok">
			</form>-->


			<?php
			
			if (!empty($_SESSION['login'])==NULL) {
				echo '<a href="inscription.php"><div class="btn-inscription">Inscription</div></a>';
				echo '<a href="login.php"><div class="btn-login">Se connecter</div></a>';
			}else {

				echo "<a href='profil.php'><div class='btn-mes-videos'>".'Control Panel'."</div></a>";
				echo '<a href="upload_video.php"><div class="btn-inscription">Upload Vidéo</div></a>';
				echo '<a href="deconnexion.php"><div class="btn-login" style="width:150px;">Se Deconnecter</div></a>';
			}

			?>
		</div>


		<nav class="navigation">
			<ul>
				<li class="text"><a href="index.php">Accueil</a></li>
				<li><a href="presentation.php">Présentation</a></li>
				<li><img class="logo" src="web/img/gsb.png"></li>
				<li><a href="affichage_video.php">Les vidéos</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
