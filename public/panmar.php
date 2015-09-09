<?php 	require_once("../inc/session.php")				//SESSION 				?>
<?php 	require_once("../inc/db_conn.php")				//SESSION 				?>
<?php require_once("../inc/functions.php")				//FUNCTIONS 			?>
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

<h2><a href="index.php">Home</a></h2>