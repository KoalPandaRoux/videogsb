<?php

include('include/bdd.php');

/*
TODO :
    - Vérifier que l'utilisateur courant à les droits d'être ici (else degage)
*/

if (empty($_GET['m']) || empty($_GET['id']))
    die("Erreur: Mauvais paramètres !");

$method = $_GET['m'];
$uid = intval($_GET['id']);
if ($uid <= 0)
    die("Erreur: Mauvais paramètres !");

if ($method === "edit") {
    // Reception du formulaire d'édition
    if (isset($_POST['send'])){
        // Non securisé, faut faire des tests (+verifs) !
        // var_dump($_POST);
        $rank = intval($_POST['rank']);
        $r = $bdd->prepare('UPDATE utilisateur SET id_type_utilisateur = ? WHERE id_utilisateur = ?');
        $ret = $r->execute(array(
            $rank,
            $uid
        ));
        if ($ret)
            echo "Edit&eacute; avec succ&egrave;s !<br /><br />";
        else
            echo "Problème :( <br /><br />";
    }
    // Formulaire d'édition
    $types = $bdd->query("SELECT * FROM type_utilisateur");
    ?>
    <form action="<?php echo '?m='.$method.'&id='.$uid; ?>" method="post">
        <select name="rank">
        <?php
        foreach ($types as $type)
            echo '<option value="' . $type['id_type_utilisateur'] . '">' . $type['libelle'] . '</options>';
        ?>
        </select>
        <input type="submit" name="send" value="Editer">
    </form>
    <?php
} elseif ($method === "delete") {
    $ret = $bdd->query("DELETE FROM utilisateur WHERE id_utilisateur=$uid");
    if ($ret != false)
        echo "Supprim&eacute; avec succ&egrave;s !<br /><br />";
    else
        echo "Problème :( <br /><br />";
} else {
    die("Erreur: Mauvais paramètres !");
}
?>
<a href="gestion_utilisateurs.php">Retour</a>
