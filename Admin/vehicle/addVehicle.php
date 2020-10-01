<?php
session_start();
if(!$_SESSION['email']){
    header("location:../login.php"); 
}
?>
<script src="../js/taluk.js"></script>
<?php 
    include("../includes/loginHeader.php");
?>
<br>

<?php
require("../includes/db.php");
$adhaarError="";
$accountSuccess="";
$emailError = "";
$unameError = "";
if(isset($_POST['submit']))
{
	 $user_name=$_POST['fname'];
	 $user_email=$_POST['email'];
	 $user_mobile=$_POST['phone'];
	 $user_adhaar=$_POST['adhaar'];
	 $regno=$_POST['regnum'];
	 $user_district=$_POST['district'];
	 $user_taluk=$_POST['taluk'];
	 $vname=$_POST['vname'];
	 $vmodel=$_POST['vmodel'];
	 $vtype=$_POST['veh_type'];
	 $ftype=$_POST['fuel_type'];

	 
	


	


	  $select="select * from vreg_tb where oemail='$user_email'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
          $emailError="<p class='text text-center text-danger'>Email already exist &nbsp</p>";
      } 


	  $select="select * from vreg_tb where oadhaar='$user_adhaar'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $adhaarError="<p class='text text-center text-danger'>Adhaar already exists &nbsp</p>";
      } 

	  $select="select * from vreg_tb where regno='$regno'";
	  $exe=$conn->query($select);
	  if($exe->num_rows>0){
		  $unameError="<p class='text text-center text-danger'>vehicle already exists &nbsp</p>";
      } 
      
	

	  else {

		$insert="insert into vreg_tb (oname,oemail,ophone,oadhaar,regno,district,taluk,vname,vmodel,vtype,ftype) values ('$user_name','$user_email','$user_mobile','$user_adhaar','$regno','$user_district','$user_taluk','$vname','$vmodel','$vtype','$ftype')";
	  $run=$conn->query($insert);
	   if($run)
		{
		  $accountSuccess="<p class='text text-center text-success'>vehicle Added Successfully</p>";
	    }
	    else
	    {
		  echo "error";
	    }  
	  }
	
	 }
	

?>


<br>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="../home.php">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="vehicleDetails.php">Owner Details</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Add Vehicle</li>
</ol>
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
            <label for="">Register Number</label>
            <input type="text" name="regnum" id="regnum"  class="form-control text-uppercase" maxlength="10" minlength="9" size="10" required>
        </div>

        <div class="form-group">
            <label for="">Vehicle Name</label>
            <input type="text" name="vname" id="vname" class="form-control text-uppercase" required>
        </div>
 
</div>
<div class="col-6">

            <div class="form-group">
                <label for="">Model Name</label>
                <input type="text" name="vmodel" id="vmodel" class="form-control text-uppercase" required>
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
                <label for="veh_type">Vehicle Type:</label>
                <select name="veh_type" id="veh_type" class="form-control" required>
                    <option value="">Select your vehicle type</option>
                    <option value="truck">Truck</option>
                    <option value="tractor">Tractor</option>
                    <option value="commercial">Commercial Vehicle</option>
                    <option value="tempo">Tempo</option>
                </select>
            </div>
            <div class="form-group">
            <label for="">Fuel Type:</label>
            <select name="fuel_type" id="fuel_type" class="form-control" required>
                    <option value="">Select vehicle Fuel type</option>
                    <option value="diesel">Diesel</option>
                    <option value="petrol">Petrol</option>
                    <option value="gasoline">Gasoline</option>
                </select>
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
<button class="btn btn-primary"><a href="ownerDetails.php" class="text-warning">cancel</a></button>
</div>
</div>
