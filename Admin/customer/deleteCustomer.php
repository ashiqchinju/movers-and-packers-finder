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
        <a href="customerDetails.php">Customer Details</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Delete Customer</li>
</ol>


<?php
require("../includes/db.php");
$id=$_GET['id'];
$select="select * from creg_tb where id='$id'";
$run=$conn->query($select);
if($run->num_rows>0){
    while($row=$run->fetch_array()){
        $name=$row['fname'];
        $username=$row['uname'];
        $email=$row['email'];
        $phone=$row['phone'];
        $adhaar=$row['adhaar'];
        $gender=$row['gender'];
        $dob=$row['dob'];
        $district=$row['district'];
        $taluk=$row['taluk'];
        $address=$row['address'];


    }
}
?>


<div class="row justify-content-center">
    <div class="col-6">
    <form method="post">

	 <div class="form-group">
	     <label for="name">Full Name:</label>
		 <input type="text" class="form-control text-uppercase" id="fname" name="fname" readonly  value="<?php echo $name; ?>" >
	 </div>			
	 <div class="form-group">
	     <label for="name">User Name:</label>
		 <input type="text" class="form-control" id="uname" name="uname" readonly  value="<?php echo $username; ?>" >
	 </div>			
	 <div class="form-group">
	     <label for="email">Email address:</label>
		 <input type="email" class="form-control" id="email" name="email" readonly  value="<?php echo $email; ?>" >
	 </div> 
	 <div class="form-group">
	     <label for="phone">Phone No:</label>
		 <input type="tel" class="form-control" id="phone" name="phone" readonly  value="<?php echo $phone; ?>">
	 </div> 
	 	 <div class="form-group">
	     <label for="adhaar">Adhaar Number:</label>
		 <input type="number" class="form-control" id="adhaar" name="adhaar" readonly  value="<?php echo $adhaar; ?>">
     </div>

</div>
<div class="col-6">
     <div class="form-group">
	     <label for="Gender">gender:</label>
		 <input type="text" class="form-control" id="gender" name="gender" readonly  value="<?php echo $gender; ?>">
	 </div>
	 <div class="form-group">
	     <label for="dob">DOB:</label>
		 <input type="date" class="form-control" id="dob" name="dob" readonly  value="<?php echo $dob; ?>">
	 </div>
	 <div class="form-group">
	     <label for="district">District:</label>
		 <input type="text" class="form-control" id="district" name="district" readonly  value="<?php echo $district; ?>">
	 </div>
	 <div class="form-group">
	     <label for="taluk">Taluk:</label>
		 <input type="text" class="form-control text-capitalize" id="taluk" name="taluk" readonly  value="<?php echo $taluk; ?>">
	 </div>
	 <div class="form-group">
	     <label for="id">Address:</label>
		 <input type="text" class="form-control text-capitalize" id="address" name="address" readonly  value="<?php echo $address; ?>">
     </div>


    </div>
</div>
<div class="row justify-content-center">
<div class="form-group">
        <input type="submit" name="update" value="Delete ID" class="form-control btn btn-danger">
    </div> &nbsp;
<div class="form-group">
        <input type="submit" name="cancel" value="Cancel" class="form-control btn btn-primary">
    </div> 
</div>
</form>
<br>

<?php
if(isset($_POST['delete'])){
    $driver=$_POST['fname'];
	$user_email=$_POST['email'];
	$adhaar=$_POST['adhaar'];
	$delete="delete from creg_tb where email='$user_email' and adhaar='$adhaar'";
	$exe=$conn->query($delete);
	if($exe){
			echo "<script>alert('customer $driver records deleted successfully')</script>";
			echo "<script>window.location.href='customerDetails.php'</script>";	
		}
	else {
		echo "<script>alert('Something went wrong')</script>";
	}
}
?>
<?php
if(isset($_POST['cancel'])){
    echo "<script>window.location.href='customerDetails.php'</script>";
}
?>