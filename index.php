<?php  include "db.php";   ?>


<?php include "header.php"; ?>

	<?php     
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$address = $_POST['address'];
			$comment = $_POST['comment'];

			$query = "INSERT INTO users(name,address,comments) VALUES ('$name','$address','$comment')";

			$result = mysqli_query($connection,$query);

			if($result){
					echo "Uploaed";
			}else{
				echo "QUERY ERROR";
			}

		}



	?>



	<form action="" method="post"> 
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control">
		</div>	

		<div class="form-group">
			<label>Comments</label>
			<textarea type="text" name="comment" class="form-control"></textarea> 
		</div>

		<input type="submit" class="btn btn-primary" value="Submit" name="submit"> 
	</form>

<a href="display.php">View all user</a>




</body>
</html>