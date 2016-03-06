<?php

include('include/class/Video.class.php');
include('include/manager/VideoManager.class.php');
include('include/bdd.php');
//include head
include('include/head.php');
include('control_sessions.php');
if (controlAdmin(	$_SESSION['type_utilisateur']) == TRUE)
{}
else{header('Location: error/404.php');}

// Si l'ID existe dans l'URL et qu'il n'est pas vide alors on le transforme en
// entier, sinon on le set à 0
$id_video = (!empty($_GET['id']) ? intval($_GET['id']) : 0);
// Instanciation de notre class
$VideoManager = new VideoManager($bdd);
// Puis on supprime la video
$identifiant = $VideoManager->deleteVideo($id_video);

if ($identifiant != 0)
{
    header('location : error/transfert_ok.php');
}
else
{
    echo "<br />La video n'a pas pu être supprimé.<br />";
    echo "<a href='gestion_videos.php'>Revenir à la gestion des vidéos</a>";

}
