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
<br>

<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="../home.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Add Customer</li>
</ol>


<?php
require("../includes/db.php");
$adhaarError="";
$accountSuccess="";
$emailError = "";
$unameError = "";
if(isset($_POST['submit']))
{
	 $user_name=$_POST['fname'];
	 $user_uname=$_POST['uname'];
	 $user_email=$_POST['email'];
	 $user_mobile=$_POST['phone'];
	 $user_adhaar=$_POST['adhaar'];
	 $user_gender=$_POST['gender'];
     $password=$_POST['password'];

	 
	


	


	  $select="select * from admin_tb where email='$user_email'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
          $emailError="<p class='text text-center text-danger'>Email already exist &nbsp</p>";
      } 


	  $select="select * from admin_tb where adhaar='$user_adhaar'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $adhaarError="<p class='text text-center text-danger'>Adhaar already exists &nbsp</p>";
      } 

	  $select="select * from admin_tb where uname='$user_uname'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $unameError="<p class='text text-center text-danger'>Try different usernames..already exists &nbsp</p>";
      } 
      
	

	  else {

		$insert="insert into admin_tb (fname,uname,email,phone,adhaar,gender,password) values ('$user_name','$user_uname','$user_email','$user_mobile','$user_adhaar','$user_gender','$password')";
	  $run=$conn->query($insert);
	   if($run)
		{
		  $accountSuccess="<p class='text text-center text-success'>Admin Added Successfully</p>";
	    }
	    else
	    {
		  echo "error";
	    }  
	  }
	
	 }
	

?>



<div class="row justify-content-center">
<?php
if($adhaarError!=""){
			echo $adhaarError;
		}
		if($accountSuccess!=""){
			echo $accountSuccess;
		}
		if($emailError!=""){
			echo $emailError;
		}
		if($unameError!=""){
			echo $unameError;
		}

        ?>
</div>
<div class="row justify-content-center">
    <div class="col-6">
<form method="post" >

	 	 <div class="form-group">
	     <label for="name">Full Name:</label>
	     <input type="text" class="form-control text-uppercase" id="fname" name="fname" placeholder="Enter Full Name" required>
        </div>
	 	 <div class="form-group">
	     <label for="uname">User Name:</label>
	     <input type="text" class="form-control text-uppercase" id="uname" name="uname" placeholder="Enter User Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" class="form-control" id="phone" name="phone" pattern="\d*" placeholder="Enter Phone Number" minlength="10" maxlength="10" size="10" required>
        </div>

</div>
<div class="col-6">

        <div class="form-group">
            <label for="adhaar">Adhaar Number:</label>
            <input type="text" class="form-control" id="adhaar" name="adhaar" placeholder="Enter Adhaar Number" pattern="\d*" required minlength="12" maxlength="12" size="12"> 
        </div>	
        <div class="form-group">
            <label for="Gender">Gender:</label>
            <select class="form-control" name="gender" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Transgender">Transgender</option>
            </select>
        </div>
        <div class="form-group">
	     <label for="password">Password:</label>
		 <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password(small letter,capital letter and a number ex: Abc101,aaBcd1 etc)" required minlength="6" maxlength="16" size="16" pattern="[A-Za-z0-9@!#$%^&*()_-=-+./,'\[]{}]{6,10}]" >
		 <input type="checkbox" onclick="myFunction()"><span class="fas fa-eye"></span>
	    </div>	 

  
       

  </div>

</div>
<div class="row justify-content-center">
<div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
        </div>

</div>


</form>
<div class="row justify-content-center">
<button class="btn btn-primary"><a href="driverDetails.php" class="text-warning">cancel</a></button>
</div>
</div>