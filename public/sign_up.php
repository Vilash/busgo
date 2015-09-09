<?php 
require_once("../inc/session.php")  //SESSION
?>
<?php   require_once("../inc/db_conn.php")        //DATABASE CONNECTION   ?>
<?php 
require_once("../inc/functions.php")	//FUNCTIONS
?>



<?php
if (isset($_POST['signupSubmit'])) {
  // Process the form

  if (empty($errors)) {
    // Perform Create

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $age = (int)$_POST['age'];
    $gender = $_POST['gender'];

    $insert_user  = "INSERT INTO user (";
    $insert_user .= "username, hashed_password, age, gender";
    $insert_user .= ") VALUES (";
    $insert_user .= "'{$username}', '{$password}', {$age}, '{$gender}'";
    $insert_user .= ")";
    $result = mysqli_query($connection, $insert_user);

    if ($result) {
      // Success
      $_SESSION["message"] = "User Created";
      redirect_to("log_in.php");
    } else {
      // Failure
      $_SESSION["message"] = "User creation failed.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>
<?php include("../inc/layouts/header.php")  //HEADER ?>

<?php $layout_context = "admin"; ?>

<div id="main">
  <div id="navigation">
    &nbsp;
  </div>
  <div id="page">
    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>

				<h1>Sign Up</h1>
				<h3>Travelling made easy</h3>
				<h3><a href="log_in.php">Log In</a></h3>
				<form action="sign_up.php" method="post">
					Username:<br><input type="text" name="username" required><br>
					Password:<br><input type="password" name="password" required><br>
					Age:<br><input type="number" name="age" required><br>
					Gender:<br><input type="radio" name="gender" value="m">Male
						<input type="radio" name="gender" value="f">Female
						<input type="radio" name="gender" value="x">X<br><br>	
						<input type="submit" name="signupSubmit" value="Signup">							
				</form>

			</div>
		</div>



<?php
include("../inc/layouts/footer.php")	//FOOTER
?>