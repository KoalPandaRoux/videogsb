	<?php 
	include('include/class/Video.class.php');
	include('include/manager/VideoManager.class.php');
	include('include/bdd.php');

	//include head
	include('include/head.php');  

	//include navigation
	include('include/navigation.php');


	$VideoManager = new VideoManager($bdd);
		$tableau_retour = $VideoManager->getContenuParDate();
		if (empty($tableau_retour))
		{
			echo 'Aucun message.';
		}			
		else {
			date_default_timezone_set('Europe/Paris');
			foreach ($tableau_retour as $valeur) { //$valeur contient l'objet video
				$dt_debut = date_create_from_format('Y-m-d', $valeur->getDate());
				echo "<h3 class='row-center'>".$valeur->getTitre()."</h3>";
				echo "<div class='row-center'' style='width:1900px'>".$valeur->getDescription()."</div>";
				echo "<h4 class='row-center'>Le ".$dt_debut->format('d/m/Y')."</h4>";
				if ($valeur->getVideo() != "") {
    			echo '<video class="video row-center" width="600" height="300" controls="controls" src="upload/'.$valeur->getVideo().'"></video>'.'<hr>';
				}
			}
		}

	



	include('include/footer.php');
