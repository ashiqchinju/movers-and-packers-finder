<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbar.css">
<script src="js/all.js"></script>
<script src="js/taluk.js"></script>
<script src="js/password.js"></script>
</head>

<?php
require("includes/db.php");
$adhaarError="";
$accountSuccess="";
$emailError = "";
$unameError = "";
if(isset($_POST['submit']))
{
	 $user_name=$_POST['name'];
	 $user_uname=$_POST['uname'];
	 $user_email=$_POST['email'];
	 $user_mobile=$_POST['phone'];
	 $user_adhaar=$_POST['adhaar'];
	 $user_gender=$_POST['gender'];
	 $user_district=$_POST['district'];
	 $user_taluk=$_POST['taluk'];
	 $user_password=$_POST['password'];
	 $user_adrs=$_POST['address'];

	 
	


	


	  $select="select * from voreg_tb where email='$user_email'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $emailError="<p class='text text-center text-danger'>Email already exists</p>";
      } 


	  $select="select * from voreg_tb where adhaar='$user_adhaar'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $adhaarError="<p class='text text-center text-danger'>Adhaar already exists</p>";
      } 

	  $select="select * from voreg_tb where uname='$user_uname'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $unameError="<p class='text text-center text-danger'>Try different usernames..already exists</p>";
      } 
      
	

	  else {

		$insert="insert into voreg_tb (fname,uname,email,phone,adhaar,gender,district,taluk,address,password) values ('$user_name','$user_uname','$user_email','$user_mobile','$user_adhaar','$user_gender','$user_district','$user_taluk','$user_adrs','$user_password')";
	  $run=$conn->query($insert);
	   if($run)
		{
		  $accountSuccess="<h1 class='text text-center text-warning'>Account Created Successfully</h1>";
	    }
	    else
	    {
		  echo "error";
	    }  
	  }
	
	 }
	

?>

<body style="background-image: url('images/vehicle.jpg'); background-repeat:no-repeat; background-size:100% 200vh;" >
<div class="container py-0">
    <br>
    <div class="row justify-content-center align-content-center">

     <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>

            <li class="drop-down active"><a href="">Sign Up</a>
              <ul>
                <li><a href="driverReg.php">Driver</a></li>
                <li class="active"><a href="vehicleOwn.php">Vehicle</a></li>
                <li><a href="customerReg.php">Customer</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="">Log in</a>
              <ul>
                <li><a href="driverLogin.php">Driver</a></li>
                <li><a href="vehicleLogin.php">Vehicle</a></li>
                <li><a href="customerLogin.php">Customer</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>

          </ul>
        </nav>
    </div>



<h1 class="mt-4 mb-3"> <small>Vehicle Owner Register</small> </h1>

<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Vehicle Owner Registration</li>
</ol>


<div class="row align-items-center justify-content-center">	 
	    <div class="col-sm-8 col-sm-offset-2 bg-transparent  alert-success" style="box-shadow:2px 2px 2px 2px gray;">
    <h4 class="text text-center alert bg-primary" style="color:white">Vehicle Owner Registration</h4>
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

<form method="post"  onsubmit="return check();">
	 	 <div class="form-group">
	     <label for="name">Full Name:</label>
	     <input type="text" class="form-control text-uppercase" id="name" name="name" placeholder="Enter Full Name" required>
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
		 <input type="text" class="form-control" id="phone" name="phone" pattern="\d*" placeholder="Enter Phone Number" minlength="10" maxlength="10" size="10" required>
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
	 <!-- <div class="form-group">
		 <label for="dob">DOB</label>
		 <input type="date" class="form-control" id="dob" name="dob" required>
	 </div> -->

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

	 <div class="form-group">
		<label for="confirm password">Confirm Password:</label>
		<input type="password" name="cpass" id="cpass" placeholder="Confirm your password" class="form-control" required>
	 </div>




		<br>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
      </div>
  
  </div>
  </form>
</div>
</div>
</body>
<br>