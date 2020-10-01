<?php
session_start();
if(!$_SESSION['email']){
    header("location:../login.php"); 
}
?>
<head>
    <script src="../js/taluk.js"></script>
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
	 $user_dob=$_POST['dob'];
	 $user_district=$_POST['district'];
	 $user_taluk=$_POST['taluk'];
     $user_adrs=$_POST['address'];
     $password=$_POST['password'];

	 
	


	


	  $select="select * from creg_tb where email='$user_email'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
          $emailError="<p class='text text-center text-danger'>Email already exist &nbsp</p>";
      } 


	  $select="select * from creg_tb where adhaar='$user_adhaar'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $adhaarError="<p class='text text-center text-danger'>Adhaar already exists &nbsp</p>";
      } 

	  $select="select * from creg_tb where uname='$user_uname'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $unameError="<p class='text text-center text-danger'>Try different usernames..already exists &nbsp</p>";
      } 
      
	

	  else {

		$insert="insert into creg_tb (fname,uname,email,phone,adhaar,gender,dob,district,taluk,address,password) values ('$user_name','$user_uname','$user_email','$user_mobile','$user_adhaar','$user_gender','$user_dob','$user_district','$user_taluk','$user_adrs','$password')";
	  $run=$conn->query($insert);
	   if($run)
		{
		  $accountSuccess="<p class='text text-center text-success'>Customer Added Successfully</p>";
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
</div>
<div class="col-6">

        <div class="form-group">
            <label for="dob">DOB</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>

        


        <div class="form-group">
            <label for="district">district</label>
            <select class="form-control text-capitalize" name="district" id="district" required  onchange="random_function()">
            <option value=" "> Select district</option>	
                <option value="Bagalkote">Bagalkote</option>	
                <option value="Bangalore Rural">Bangalore Rural</option>
                <option value="Bangalore Urban">Bangalore Urban</option>
                <option value="Belagavi">Belagavi</option>
                <option value="Bellary">Bellary</option>
                <option value="Bidar">Bidar</option>
                <option value="Bijapur">Bijapur</option>
                <option value="Chamarajanagar">Chamarajanagar</option>
                <option  value="Chikmagaluru">Chikballapura</option>
                <option  value="Chikmagaluru">Chikmagaluru</option>
                <option  value="Chitradurga">Chitradurga</option>
                <option  value="Dakshina Kannada">Dakshina Kannada</option>
                <option  value="Davanagere">Davanagere</option>
                <option  value="Dharwad">Dharwad</option>
                <option  value="Gadag">Gadag</option>
                <option  value="Gulbarga">Gulbarga</option>
                <option  value="Hassan">Hassan</option>
                <option  value="Haveri">Haveri</option>
                <option  value="Kodagu">Kodagu</option>
                <option  value="Kolar">Kolar</option>
                <option  value="Koppal">Koppal</option>
                <option  value="Mandya">Mandya</option>
                <option  value="Mysore">Mysore</option>
                <option  value="Raichur">Raichur</option>
                <option  value="Raichur">Ramanagara</option>
                <option  value="Shimoga">Shimoga</option>
                <option  value="Tumkur">Tumkur</option>
                <option  value="Udupi">Udupi</option>
                <option  value="Uttar Karnataka">Uttar Karnataka</option>
                <option  value="Yadagiri">Yadagiri</option>
            </select>
    
        
        <br>
            <label for="taluk">Taluk</label>
            <select name="taluk" id="taluk" class="form-control text-capitalize" required onchange="random_function1()" required>

            </select>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control" required>
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