<?php 
    session_start();
    if(!$_SESSION['email']){
        header("location:../driverLogin.php");
    }
    include("../includes/driverLoginHeader.php"); 

?>
<br>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="driverHome.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Details</li>
</ol>


<?php
require("../includes/db.php");
$sEmail=$_SESSION['email'];
$select="select * from dreg_tb where email='$sEmail'";
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
    <div class="col-6 col-offset-3">
    <form method="post">
					<div class="text text-center"> <h3><label><u>Your Details</u></label></h3></div>
	 <div class="form-group">
	     <label for="name">Full Name:</label>
		 <input type="text" class="form-control text-uppercase" id="fname" name="fname"  required value="<?php echo $name; ?>" readonly>
	 </div>			
	 <div class="form-group">
	     <label for="name">User Name:</label>
		 <input type="text" class="form-control" id="uname" name="uname"  required value="<?php echo $username; ?>" readonly>
	 </div>			
	 <div class="form-group">
	     <label for="email">Email address:</label>
		 <input type="email" class="form-control" id="email" name="email"  required value="<?php echo $email; ?>" readonly>
	 </div> 
	 <div class="form-group">
	     <label for="phone">Phone No:</label>
		 <input type="tel" class="form-control" id="phone" name="phone"  required value="<?php echo $phone; ?>" readonly>
	 </div> 
	 	 <div class="form-group">
	     <label for="adhaar">Adhaar Number:</label>
		 <input type="number" class="form-control" id="adhaar" name="adhaar"  required value="<?php echo $adhaar; ?>" readonly>
	 </div>
	 <div class="form-group">
	     <label for="Gender">gender:</label>
		 <input type="text" class="form-control" id="gender" name="gender"  required value="<?php echo $gender; ?>" readonly>
	 </div>
	 <div class="form-group">
	     <label for="dob">DOB:</label>
		 <input type="date" class="form-control" id="dob" name="dob"  required value="<?php echo $dob; ?>" readonly>
	 </div>
	 <div class="form-group">
	     <label for="district">District:</label>
		 <input type="text" class="form-control" id="district" name="district"  required value="<?php echo $district; ?>" readonly>
	 </div>
	 <div class="form-group">
	     <label for="taluk">Taluk:</label>
		 <input type="text" class="form-control text-capitalize" id="taluk" name="taluk"  required value="<?php echo $taluk; ?>" readonly>
	 </div>
	 <div class="form-group">
	     <label for="id">Address:</label>
		 <input type="text" class="form-control text-capitalize" id="address" name="address"  required value="<?php echo $address; ?>" readonly>
	 </div>

  </form>
    </div>
</div>