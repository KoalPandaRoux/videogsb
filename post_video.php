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

if ($_FILES['upload']['error']) {
              switch ($_FILES['upload']['error']){
                   case 1: // UPLOAD_ERR_INI_SIZE
                       echo "La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).";
                       break;
                   case 2: // UPLOAD_ERR_FORM_SIZE
                       echo "La taille du fichier est plus grande que la limite autorisée par le formulaire (paramètre post_max_size du fichier php.ini).";
                       break;
                   case 3: // UPLOAD_ERR_PARTIAL
                       echo "L'envoi du fichier a été interrompu pendant le transfert.";
                       break;
                   case 4: // UPLOAD_ERR_NO_FILE
                       echo "La taille du fichier que vous avez envoyé est nulle.";
                       break;
              }
        }
        else {
         //si il n'ya pas d'erreur alors $_FILES['nom_du_fichier']['error'] vaut 0
            echo "Aucune erreur dans l'upload du fichier.<br />";
            if ((isset($_FILES['upload']['name'])&&($_FILES['upload']['error'] == UPLOAD_ERR_OK))) {
                $chemin_destination = 'upload/';
                //déplacement du fichier du répertoire temporaire (stocké par défaut) dans le répertoire de destination
                move_uploaded_file($_FILES['upload']['tmp_name'], $chemin_destination.$_FILES['upload']['name']);
                echo "Le fichier ".$_FILES['upload']['name']." a été copier dans le répertoire upload";
            }
            else {
                echo "Le fichier n'a pas pu être copier dans le répertoire upload.";
            }
        }

 $VideoManager = new VideoManager($bdd);
        //création d'un objet Video avec les valeurs de ses attributs complétées par celles reçues par $_POST
        $video = new Video();
        $video->setTitre(htmlentities(addslashes($_POST['titre'])));
        $video->setDescription(htmlentities(addslashes($_POST['description'])));
        $video->setDate(date("Y-m-d"));
        $video->setVideo($_FILES['upload']['name']);
        $identifiant = $VideoManager->insertionVideo($video);

    if ($identifiant != 0)
    {
        header('location : error/transfert_ok.php');
    }
    else
    {
        echo "<br />La description n'a pas pu être ajouté.<br /><br />";
    }

 echo "<a href='index.php'>Revenir sur la page principal</a><br/>";
 echo "<a href='affichage_video.php'>Aller sur la page des videos</a>";



?>
