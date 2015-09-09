<?php 	require_once("../inc/session.php")				//SESSION 				?>
<?php require_once("../inc/functions.php")				//FUNCTIONS 			?>

<?php 
	if (!isset($_SESSION['id'])) {
		redirect_to('log_in.php');
	}
?>

<?php 
	$_SESSION['id'] = null;
	$_SESSION['username'] = null;
	redirect_to('log_in.php');	
?>