<?php
session_start();
if(!$_SESSION['email']){
    header("location:../login.php"); 
}
?>
<head>
    <script src="../js/password.js"></script>
</head>
<?php 
    include("../includes/loginHeader.php");
?>

<?php
require("../includes/db.php");
$error="";
$success="";


if(isset($_POST['chpass']))
{
	 $user_email=$_POST['email'];
     $uname=$_POST['email'];
	 $user_password=$_POST['password'];
	 $user_adhaar=$_POST['adhaar'];

		$select="select * from admin_tb where email='$user_email' or uname='$uname' and adhaar='$user_adhaar' ";
		 //checks the database for email and password
	    	$run=$conn->query($select);
		  	if($run->num_rows>0){
				
				
 
            
            $update2="update admin_tb set password='$user_password' where email='$user_email' or uname='$uname'";
            $run2 = $conn->query($update2);
            if($run2){
                echo "<script>alert('Password Changed successfully')</script>";		
                
                echo "<script>window.location.href='adminDetails.php'</script>";
                
           
		} 
    } else {
		echo "<script>alert('either adhaar or username or email is incorrect')</script>";
	}

}
    

?>



<br>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="../home.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Change Password</li>
</ol>


<div class="row align-content-center justify-content-center">	 
	    <div class="col-sm-8 col-sm-offset-2 bg-transparent alert alert-primary" style="box-shadow:2px 2px 2px 2px gray;">
		<h4 class="text-dark text-center alert bg-transparent" style="color:white">Change Password</h4>
		<h5 class="text text-center text-danger"><?php
		if($error!=""){
			echo $error;
		}
		?></h5>
		<h5 class="text text-center text-success"><?php
		if($success!=""){
			echo $success;
		}
		
		?></h5>
		<form method="post">

	 <div class="form-group">
	     <label for="email">Email address / ID:</label>
		 <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email or ID"  value="">
	 </div>



	 <div class="form-group">
	     <label for="adhaar">Adhaar:</label>
		 <input type="text" class="form-control" id="adhaar" name="adhaar" placeholder="Enter Your Adhaar Number" minlength="12" maxlength="12" size="12">
     </div>	 
     <div class="form-group">
	     <label for="password">Password:</label>
		 <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password(small letter,capital letter and a number ex: Abc101,aaBcd1 etc)"  value="" minlength="6" maxlength="10" size="10" pattern="[A-Za-z0-9@!#$%^&*()_-=-+./,'\[]{}]{6,10}]{6,10}">

		 <input type="checkbox" onclick="myFunction()"> <span class="fas fa-eye"></span>
			 
     </div> 


	 
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block" name="chpass">Change Password</button>
      </div>
      <div class="form-group">
        <input type="submit" name="cancel" value="Cancel" class="form-control btn btn-primary">
    </div> 
  
  </div>
  </form>

  <?php
if(isset($_POST['cancel'])){
    echo "<script>window.location.href='adminDetails.php'</script>";
}
?>