<!--BDD-->
<?php 

include('include/bdd.php');
include('control_sessions.php');
if (controlAdmin(	$_SESSION['type_utilisateur']) == TRUE) 
{} 
else{header('Location: error/404.php');}

  include('include/head.php');  
  //include navigation
  include('include/navigation.php'); 
  ?>


<form class="form" action="post_video.php" method="POST" enctype="multipart/form-data">

  <h2>Formulaire d'envoi video : </h2>
  <label for="titre">Titre du fichier (max. 50 caractères) :</label><br>
  <input class="input_video" type="text" name="titre" required="required"><br>

  <label for="titre">Description du fichier (max. 250 caractères) :</label><br>
  <input class="input_video" type="text" name="description" required="required"><br>

  <label for="titre">Catégories de la vidéo :</label><br>
  <select class="input_video" name="id_genre" required="required">
           <option value="0">Choisir une catégorie :</option>
           <option value="1">IRM</option>
           <option value="2">Matériels lourds</option>
           <option value="3">Matériels médical à domicile</option>
           <option value="4">Nettoyant et désinfectant</option>
       </select><br><br>

  <input type="hidden" name="MAX_FILE_SIZE" value="750000000" />

  <label for="titre">Envoyer votre fichier video :</label><br>
  <input class="input_video" type="file" name="upload" required="required"><br>

  <button class="input_envoyer" type="submit">Envoyer la vidéo</button>


</form>

<!--FOOTER-->
<?php include('include/footer.php');  ?>
