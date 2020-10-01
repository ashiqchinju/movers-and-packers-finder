<?php
session_start();
if(!$_SESSION['email']){
    header("location:../login.php"); 
}
?>
<?php 
    include("../includes/loginHeader.php");
?>
<br>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="../home.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="driverQueries.php">Driver Queries</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Query Update</li>
</ol>

<div class="row align-align-content-center justify-content-center">	
				
				<?php			
					require("../includes/db.php");	

					$select="select * from dquery_tb";		
					$run=$conn->query($select);
					if($run->num_rows>0){
						while($row=$run->fetch_array()){
							$user_name=$row['name'];
                             $user_email=$row['email'];
                             $dl=$row['dl'];
							$user_adhaar=$row['adhaar'];
							$user_message=$row['message'];
						}
						?>
				<br>

					<form method="post">
						<div class="form-group">
							<label for="name">Full Name:</label>
							<input type="text" class="form-control" id="name" name="name"  required   value="<?php echo strtoupper($user_name); ?>" readonly>
						</div>

						

						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email" name="email"  required   value="<?php echo $user_email; ?>" readonly>
						</div> 


						<div class="form-group">
							<label for="voterid">D L Number:</label>
							<input type="text" class="form-control" id="vid" name="vid"  required   value="<?php echo $dl; ?>" readonly>
						</div> 
					

						<div class="form-group">
							<label for="adhaar">adhaar:</label>
							<input type="text" class="form-control" id="adhaar" name="adhaar"  required   value="<?php echo $user_adhaar; ?>">
						</div>
						
						<div class="form-group">
							<label for="message">Messasge:</label>
							<input type="text" class="form-control" id="message" name="message"  required   value="<?php echo $user_message;?>" readonly>
						</div>

						<div class="form-group">
							<input type="submit" name="update" value="Update ID" class="form-control btn btn-success">
						</div>

						<div class="form-group">
							<input type="submit" name="delete" value="Delete ID" class="form-control btn btn-danger">
						</div>
						
					</form>
						
						
						
					<?php
					}
					else {
						echo "<p class='text text-center alert text-danger'>Record Not Found!!</p>";
						
					}
				?>
						</div>
					</div>
					
			</div>
			<div class="col-sm-6">			
			</div>
		</div>
	</body>	
</html>	


<?php
if(isset($_POST['update'])){
    echo "<script>alert('query marked as unsolved');</script>";
}
?>

<?php
if(isset($_POST['delete'])){
    $select="select * from dquery_tb";		
					$run=$conn->query($select);
					if($run->num_rows>0){
						while($row=$run->fetch_array()){
							$id=$row['id'];
						}
	$delete="delete from dquery_tb where id='$id'";
	$exe=$conn->query($delete);
	if($exe){
			echo "<script>alert('$user_email query resolved and request deleted successfully')</script>";
			echo "<script>window.location.href='driverQueries.php'</script>";	
		}
	else {
		echo "<script>alert('Something went wrong')</script>";
	}
}
}
?>


