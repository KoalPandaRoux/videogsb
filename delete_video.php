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

$VideoManager = new VideoManager($bdd);
//création d'un objet Video avec les valeurs de ses attributs complétées par celles reçues par $_POST
$id_video = new Video();
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