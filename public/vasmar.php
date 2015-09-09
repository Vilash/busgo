<?php 	require_once("../inc/session.php")				//SESSION 				?>
<?php 	require_once("../inc/db_conn.php")				//SESSION 				?>
<?php require_once("../inc/functions.php")				//FUNCTIONS 			?>
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
<h2><a href="index.php">Home</a></h2>