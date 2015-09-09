<?php 	require_once("../inc/session.php")				//SESSION 				?>
<?php 	require_once("../inc/db_conn.php")				//SESSION 				?>
<?php require_once("../inc/functions.php")				//FUNCTIONS 			?>

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
				echo $user['price'] * (1-0.5). "(C)";;
			} else {
				echo $user['price'];								
			}
			echo "</td>";
			echo "</tr>";						
		}						
	?>
	</tbody>	
</table>				
<h2><a href="index.php">Home</a></h2>