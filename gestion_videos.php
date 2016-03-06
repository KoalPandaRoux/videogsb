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

<h2>Panel admin gestion des vidéos</h2>

<div class="container lien-gestion">
    <a href="gestion_utilisateurs.php">Gestion des Utilisateurs</a><br>
    <a href="gestion_videos.php">Gestion des Vidéos</a>
</div>

<?php

/*
 * Liste des vidéos par id_utilisateur, id_type_utilisateur, login, nom, prenom, email, date_de_naissance
 */
$reponse = $bdd->query('SELECT * FROM video');
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <strong>L'id vidéo est</strong> : <?php echo $donnees['id_video'];?><br />
        <strong>Le titre est</strong> : <?php echo $donnees['titre'];?><br />
        <strong>La description est</strong> : <?php echo $donnees['description'];?><br />
        <strong>La vidéo est</strong> : <?php echo $donnees['video'];?><br />
        <strong>La date d'upload est</strong> : <?php echo $donnees['date'];?><br />
        <a href="#?id=<?php echo $donnees['id_video']; ?>">Modifier</a><br />
        <a href="delete_video.php?id=<?php echo $donnees['id_video']; ?>">Supprimer</a>
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>



<!--FOOTER-->
<?php include('include/footer.php');  ?>
