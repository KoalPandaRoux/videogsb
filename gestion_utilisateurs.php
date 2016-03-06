<?php
//include bdd
include('include/bdd.php');
include('include/class/Utilisateur.class.php');
include('include/manager/UtilisateurManager.class.php');


//include head
include('include/head.php');
//include navigation
include('include/navigation.php');
include('control_sessions.php');
if (controlAdmin(	$_SESSION['type_utilisateur']) == TRUE)
{}
else{header('Location: error/404.php');}

?>

<h2>Panel admin gestion des utilisateurs</h2>

<div class="container lien-gestion">
    <a href="gestion_utilisateurs.php">Gestion des Utilisateurs</a><br>
    <a href="gestion_videos.php">Gestion des Vidéos</a>
</div>



<?php

/*
 * Liste mes utilisateur par id_utilisateur, id_type_utilisateur, login, nom, prenom, email, date_de_naissance
 */
$reponse = $bdd->query('SELECT * FROM utilisateur');
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <strong>L'id utilisateur est</strong> : <?php echo $donnees['id_utilisateur']; ?><br />
        <strong>L'id type est</strong> : <?php echo $donnees['id_type_utilisateur']; ?><br />
        <strong>Le login est</strong> : <?php echo $donnees['login']; ?><br />
        <strong>Le prénom est</strong> : <?php echo $donnees['prenom']; ?><br />
        <strong>Le nom est</strong> : <?php echo $donnees['nom']; ?><br />
        <strong>L'email est</strong> : <?php echo $donnees['email']; ?><br />
        <strong>La date de naissance est</strong> : <?php echo $donnees['date_de_naissance']; ?><br />
        <a href="admin_users.php?m=edit&id=<?php echo $donnees['id_utilisateur']; ?>">Edit</a> |
        <a href="admin_users.php?m=delete&id=<?php echo $donnees['id_utilisateur']; ?>">Supprimer</a>
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>



<!--FOOTER-->
<?php include('include/footer.php');  ?>
