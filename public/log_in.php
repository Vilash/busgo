<?php 	require_once("../inc/session.php")				//SESSION 				?>
<?php 	require_once("../inc/db_conn.php")				//DATABASE CONNECTION 	?>
<?php 	require_once("../inc/functions.php")			//FUNCTIONS 			?>



<?php 
$username = "";
	if (isset($_POST['login_submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$regd_user = attempt_login($username, $password);
		if($regd_user) {
			$_SESSION['id'] = $regd_user['id'];
			$_SESSION['username'] = $regd_user['username'];
			redirect_to("index.php");
		} else {
			$_SESSION['message'] = "Username/password not found";
		}
	}
?>

<?php 	include("../inc/layouts/header.php")			//HEADER 				?>
		<div id="main">


			<div id="navigation">
			
			</div>


			<div id="page">
				<?php 	echo message();	?>
				<h1>Log In</h1>
				<h3>Travelling made easy</h3>
				<h3><a href="sign_up.php">Sign Up</a></h3>
				<form action="log_in.php" method="post">
					Username:<br><input type="text" name="username" value="<?php echo htmlentities($username);?>" required><br>
					Password:<br><input type="password" name="password" required><br><br>
					<input type="submit" value="Log In" name="login_submit">
				</form>
				
			</div>
		</div>



<?php
include("../inc/layouts/footer.php")	//FOOTER
?>