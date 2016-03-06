<?php 

class VideoManager
{
	//instance pdo
	private $base;

	public function __construct($base)
	{	
		
		$this->setDb($base);
	}

	public function setDb($base)
	{
		$this->base = $base;
	}

	public function getContenuParDate()
	{
		$tableau = array();
		$compteur = 0;
		$resultat = $this->base->query('SELECT * FROM video order by Date DESC');// requete sqk qui séléctionne toutes les vidéos et les trie par date dans l'odre décroissant
		//fetch sur chaque ligne ramenée par la requête	
		while ($ligne = $resultat->fetch()) 
		   {
			$video = new Video();
		    $video->setIdVideo($ligne['id_video']);
		    //$video->setIdGenre($ligne['id_genre']);
			$video->setTitre($ligne['titre']);
			$video->setDescription($ligne['description']);
			$video->setDate($ligne['date']);
			$video->setVideo($ligne['video']);
			$tableau[$compteur] = $video; //stockage de l'objet dans le tableau
			$compteur++;
		    }   
			return $tableau;	
	}

	//fonction qui insert les videos
	public function insertionVideo(Video $video){
 	//Insertion des informations vidéos
	$sql = "INSERT INTO video(titre, description, date, video) VALUES ('".$video->getTitre()."', '".$video->getDescription()."','".$video->getDate()."','".$video->getVideo()."')";
		echo $sql;
		$this->base->exec($sql);
		//récupération du dernier identifiant
		$identifiant = $this->base->lastInsertId();
		return $identifiant;
	}



	//fonction qui permet de supprimer les vidéos
	public function deleteVideo(Video $id_video){
		var_dump($id_video);
		$sql = "DELETE FROM video WHERE id_video";
		echo $sql;
		$this->base->exec($sql);
	}

}
