<?php
session_start();
if(!$_SESSION['email']){
    header("location:../login.php"); 
}
?>
<?php 
    include("../includes/loginHeader.php");
?>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="../home.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Admin Details</li>
</ol>

<?php
$email=$_SESSION['email'];
require('../includes/db.php');

    $select="select * from admin_tb  where email='$email'";
    $run=$conn->query($select);
    if($run->num_rows>0){
        while($row=$run->fetch_array()){
            $fname=$row['fname'];
            $uname=$row['uname'];
            $email=$row['email'];
            $phone=$row['phone'];
            $adhaar=$row['adhaar'];
            $gender=$row['gender'];
        }
    }

?>


<div class="row justify-content-center align-content-center">
    <form action="" method="post">
        <div class="text-center">
            <h3><label><u>Admin Details</u></label></h3>
        </div>

        <div class="form-group">
            <label for="">Full Name:</label>
            <input type="text" name="name" id="name" class="form-control" required value="<?php echo $fname?>" readonly>
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="name" id="name" class="form-control" required value="<?php echo $uname?>" readonly>
        </div>
        <div class="form-group">
	     <label for="email">Email address:</label>
		 <input type="email" class="form-control" id="email" name="email"  required value="<?php echo $email; ?>" readonly>
	    </div> 
        <div class="form-group">
	     <label for="phone">Phone:</label>
		 <input type="text" class="form-control" id="phone" name="phone" required value="<?php echo $phone; ?>" readonly>
	    </div> 
	 	 <div class="form-group">
	     <label for="adhaar">Adhaar Number:</label>
		 <input type="number" class="form-control" id="adhaar" name="adhaar"  required value="<?php echo $adhaar; ?>" readonly>
	    </div>
	    <div class="form-group">
	     <label for="Gender">gender:</label>
		 <input type="text" class="form-control" id="gender" name="gender"  required value="<?php echo $gender; ?>" readonly>
        </div>


    </form>
</div>
</div>
