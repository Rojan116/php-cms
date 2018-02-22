<?php 
	include "db.php";
	$the_user_id = $_GET['edit'];
	$query = "SELECT * FROM users WHERE id=$the_user_id";
	$update_query = mysqli_query($connection,$query);
	if(!$update_query){
		echo "Query failed in update";
	}
	while($row = mysqli_fetch_assoc($update_query)) {
		$id = $row['id'];
		$name = $row['name'];
		$address = $row['address'];
		$comment = $row['comments'];
	}

	

  ?>





<form action="" method="post"> 
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control"  value="<?php echo $name; ?>">
		</div>

		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
		</div>	

		<div class="form-group">
			<label>Comments</label>
			<input type="text" name="comment" class="form-control" value="<?php echo $comment; ?>"> 
		</div>

		<input type="submit" class="btn btn-primary" value="Update" name="update"> 

		<?php     


		if(isset($_POST['update'])){	
		 $name = $_POST['name'];
		 $addresss = $_POST['address'];
		 $comment = $_POST['comment'];


		$query = "UPDATE users SET ";
          $query .="name  = '{$name}', ";
          $query .="address = '{$address}', ";
          $query .="comments = '{$comment}'";
          $query .= "WHERE id = {$the_user_id} ";

          $update_query = mysqli_query($connection,$query);
          if(!$update_query){
          	echo "Query Failed" . mysqli_error($connection);
          }
		
		header("Location: display.php");
	}



		?>



	</form>

