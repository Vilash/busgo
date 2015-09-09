<?php 	require_once("../inc/session.php")				//SESSION 				?>
<?php 	require_once("../inc/db_conn.php")				//SESSION 				?>
<?php require_once("../inc/functions.php")				//FUNCTIONS 			?>
<?php if (!isset($_SESSION['id'])) {
	redirect_to('log_in.php');
}?>
<?php 
include("../inc/layouts/header.php")	//HEADER
?>
		<div id="main">
			<div id="page">
				<h1>Dashboard</h1>
				<h3>Travelling made easy</h3>
				<h3><?php echo "Hi " . $_SESSION['username']. " "; ?><a href="log_out.php">Log Out</a></h3>				
				<br>
				<h2><a href="panmar.php">Panaji - Margao</a></h2>
				<table>
					<thead>
						<tr>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$user_set = find_user("Panaji","Margao");
						while ($user = mysqli_fetch_assoc($user_set)) {
							echo "<tr>";
							echo "<td>" . $user['username'] . "</td>";
							echo "</tr>";						
						}						
					?>
					</tbody>	
				</table>				
				<h2><a href="vasmar.php">Vasco - Margao</a></h2>
				<table>
					<thead>
						<tr>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$user_set = find_user("Vasco","Margao",60);
						while ($user = mysqli_fetch_assoc($user_set)) {
							echo "<tr>";
							echo "<td>" . $user['username'] . "</td>";
							echo "</tr>";						
						}						
					?>
					</tbody>	
				</table>				
				<h2><a href="travellers.php">Travellers</a></h2>
				<table>
					<thead>
						<tr>
							<th>Username</th>
							<th>Source</th>
							<th>Destination</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$user_set = find_user();
						while ($user = mysqli_fetch_assoc($user_set)) {
							echo "<tr>";
							echo "<td>" . $user['username'] . "</td>";
							echo "<td>" . $user['source'] . "</td>";
							echo "<td>" . $user['destination'] . "</td>";
							echo "</tr>";						
						}						
					?>
					</tbody>	
				</table>
				<h2><a href="travellerssc.php">Travellers S and C</a></h2>
				<table>
					<thead>
						<tr>
							<th>Username</th>
							<th>Source</th>
							<th>Destination</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$user_set = find_user();
						while ($user = mysqli_fetch_assoc($user_set)) {
							echo "<tr>";
							echo "<td>" . $user['username'] . "</td>";
							echo "<td>" . $user['source'] . "</td>";
							echo "<td>" . $user['destination'] . "</td>";
							echo "<td>";
							if ($user['age'] > 60)   {
								echo $user['price'] * (1-0.4). "(S)";
							} else if ($user['age'] < 16) {
								echo $user['price'] * (1-0.5). "(J)";;
							} else {
								echo $user['price'];								
							}
							echo "</td>";
							echo "</tr>";						
						}						
					?>
					</tbody>	
				</table>				
			</div>
		</div>



<?php
include("../inc/layouts/footer.php")	//FOOTER
?>