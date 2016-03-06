<!--BDD-->
<?php include'include/bdd.php';
include'control_sessions.php';
if (controlAdmin(	$_SESSION['type_utilisateur']) == TRUE) {

} else {
    header('Location:redirection_error_sla.php');
 }
?>

<!--HEAD-->
<?php include'include/head.php';  ?>

<!--NAVIGATION-->
<?php include'include/navigation.php';  ?>








<!--FOOTER-->
<?php include('include/footer.php');  ?>
