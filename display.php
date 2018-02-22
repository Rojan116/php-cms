<?php include "db.php" ?>
<?php include "header.php"; ?>


<table class="table table-bordered table-hovered">
	<thead>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Address</td>
		<td>Comment</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	</thead>
	



	<tbody>
		<?php
		$query = "SELECT * from users";
		$select_query = mysqli_query($connection,$query);
		if(!$select_query){
			echo "Query failed";
		}
		while ($row = mysqli_fetch_assoc($select_query)) {
			$id = $row['id'];
			$name = $row['name'];
			$address = $row['address'];
			$comment = $row['comments'];	

			?>
			
			<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $address; ?></td>
			<td><?php echo $comment; ?></td>
			<td><a href="update.php?edit=<?php echo $id; ?>">Edit</a></td>
			<td><a href="display.php?delete=<?php echo $id; ?>">Delete</a></td>
			</tr>
			</tbody>

	<?php	} ?>





	
	
</table>




						<?php 


                            if(isset($_GET['delete'])){
                                $the_user_id = $_GET['delete'];
                                $query = "DELETE FROM users where id = '{$the_user_id}'";
                            $delete_query = mysqli_query($connection,$query);

                             if(!$delete_query){
                             	echo "Query failed" . mysqli_error($connection);
                             }
                             header("Location: display.php");
                             
                            }
                        ?>