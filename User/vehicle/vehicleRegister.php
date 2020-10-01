<head>
    <script src="../js/taluk.js"></script>
</head>
<?php
    session_start();
    include("../includes/vehicleLoginHeader.php");
    if(!$_SESSION['email']){
        echo"<script>window.location.href='../vehicleLogin.php'</script>"; 
    }
?>
<br>

<?php
	if(isset($_POST['submit']))
{
	require("../includes/db.php");
    $name=$_POST['oname'];
    $email=$_POST['email'];
    $adhaar=$_POST['adhaar'];
    $phone=$_POST['phone'];
    $rgnum=$_POST['rgnum'];
    $district=$_POST['district'];
    $taluk=$_POST['taluk'];
    $vname=$_POST['vname'];
    $vmodel=$_POST['vmodel'];
    $vtype=$_POST['veh_type'];
    $ftype=$_POST['fuel_type'];

    $select="select * from vreg_tb where regno='$rgnum'";
    $exe=$conn->query($select);
    if($exe->num_rows>0){
        echo "<script>alert('Vehicle already exists');</script>";
    } else {

    $insert="insert into vreg_tb (oname,oemail,oadhaar,ophone,regno,district,taluk,vname,vmodel,vtype,ftype) values ('$name','$email','$adhaar','$phone','$rgnum','$district','$taluk','$vname','$vmodel','$vtype','$ftype')";
	  $run=$conn->query($insert);
	   if($run)
		{
            echo "<script>alert('Vehicle Registered Succesfully');</script>";
		  header("location:vehicleHome.php");
	    }
	    else
	    {
		  echo "error";
	    }  
	  
    }	    
}

?>

<?php
require("../includes/db.php");
$user_email=$_SESSION['email'];
$d="select * from voreg_tb where email='$user_email'";
$dr=$conn->query($d);
if($dr->num_rows>0){
    while($row=$dr->fetch_array()){
        $oname=$row['fname'];
        $omail=$row['email'];
        $oadhaar=$row['adhaar'];
    }
}
?>



<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="vehicleHome.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Vehicle Register</li>
</ol> 
<div class="row align-content-center justify-content-center">


    <div class="col-8 col-offset-2 bg-transparent  alert-success" style="box-shadow:2px 2px 2px 2px black;">
    <h4 class="text text-center alert bg-primary" style="color:white">Vehicle Register</h4>

    <br>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Owner Name</label>
                <input type="text" name="oname" id="oname" class="form-control text-uppercase" value="<?php echo $oname?>">
            </div>
            <div class="form-group">
                <label for="email">Owner Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $omail;?>">
            </div>
            <div class="form-group">
                <label for="email">Owner Adhaar</label>
                <input type="text" name="adhaar" id="adhaar" class="form-control" value="<?php echo $oadhaar;?>">
            </div>
            <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" class="form-control" id="phone" name="phone" pattern="\d*" placeholder="Enter Phone Number" minlength="10" maxlength="10" size="10" required>
            </div>
            <div class="form-group">
                <label for="">Register Number</label>
                <input type="text" name="rgnum" id="rgnum"  class="form-control text-uppercase" maxlength="10" minlength="9" size="10" required>
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
    
        
        
            <label for="taluk">Taluk</label>
            <select name="taluk" id="taluk" class="form-control text-capitalize" required onchange="random_function1()" required>

            </select>
        </div>
            <div class="form-group">
                <label for="">Vehicle Name</label>
                <input type="text" name="vname" id="vname" class="form-control text-uppercase" required>
            </div>
            <div class="form-group">
                <label for="">Model Name</label>
                <input type="text" name="vmodel" id="vmodel" class="form-control text-uppercase" required>
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

            <div class="form-group">
                <input type="submit" value="update" class="btn btn-success btn-block" name="submit">
            </div>  
        </form>
 
    </div>

</div>
<br>


