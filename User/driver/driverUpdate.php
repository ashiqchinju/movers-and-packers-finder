<?php
session_start();
include("../includes/driverLoginHeader.php");
if(!$_SESSION['email']){
    echo"<script>window.location.href='../driverLogin.php'</script>"; 
}
?>
<br>


<?php
require("../includes/db.php");
$email=$_SESSION['email'];
$check="select * from dreg_tb where email='$email'";
$ch=$conn->query($check);
if($ch->num_rows>0){
    while($row=$ch->fetch_array()){
        $vt=$row['veh_type'];
        $dl=$row['dl_number'];
        if($vt!="" || $dl!=""){

        
?>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="driverHome.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Update</li>
</ol>    
<h4 class="text-success pl-5">Your Updpated Details Are:</h4>
    <div class="row justify-content-center">
        
    <form action="">
        <div class="form-group">
            <label for="">Vehicle Type</label>
            <input type="text" name="vt" id="vt" value="<?php echo $row['veh_type'];?>" class="form-control text-uppercase">
        </div>
        <div class="form-group">
            <label for="">DL Number </label>
            <input type="text" name="dl" id="dl" value="<?php echo $row['dl_number'];?>" class="form-control text-uppercase">
        </div>
    </form>
    </div>
</div>

<?php
} else {
    ?>




		  




<?php
$user_email=$_SESSION['email'];
?>
<div class="container">
    <div class="row align-content-center justify-content-center">
    <div class="col-sm-8 col-sm-offset-2 bg-transparent  alert-success" style="box-shadow:2px 2px 2px 2px black;">
    <br>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $user_email;?>">
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
                <label for="dl">Driving Licence Number:</label>
                <input type="text" name="dl" id="dl" placeholder="Enter DL Number" pattern="?{2}/\d{2}/\d{4}/\d{7}" minlength="17" maxlength="17" size="17" class="form-control" required>
            </div>  
            <div class="form-group">
                <input type="submit" value="update" class="btn btn-success btn-block" name="submit">
            </div>  
        </form>
    </div>
</div>


<?php
}
}
}
?>



<?php
	if(isset($_POST['submit']))
{
	require("../includes/db.php");

    $user_email=$_SESSION['email'];
    $user_dl=$_POST['dl'];
    $user_vt=$_POST['veh_type'];

	  
    $insert="update dreg_tb set veh_type='$user_vt', dl_number='$user_dl' where email='$user_email'";
	  $run=$conn->query($insert);
	   if($run)
		{
		  echo "<script>alert('Your request has been submitted successfully')</script>";
		  header("location:driverHome.php");
	    }
	    else
	    {
		  echo "error";
	    }  
	  
	    
}

?>
