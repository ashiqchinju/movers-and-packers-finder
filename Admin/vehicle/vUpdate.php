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
        <a href="vehicleDetails.php">Vehicle Details</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Update Details</li>
</ol>
<?php
require("../includes/db.php");
$id=$_GET['id'];
$select="select * from vreg_tb where id='$id'";
$run=$conn->query($select);
if($run->num_rows>0){
    while($row=$run->fetch_array()){
        $name=$row['oname'];
        $email=$row['oemail'];
        $adhaar=$row['oadhaar'];
        $phone=$row['ophone'];
        $regno=$row['regno'];
        $district=$row['district'];
        $taluk=$row['taluk'];
        $vname=$row['vname'];
        $vmodel=$row['vmodel'];
        $vtype=$row['vtype'];
        $ftype=$row['ftype'];

    }
}
?>


<div class="row justify-content-center">
    <div class="col-6">
    <form method="post">

	 <div class="form-group">
	     <label for="name">Full Name:</label>
		 <input type="text" class="form-control text-uppercase" id="fname" name="fname"  required  value="<?php echo $name; ?>" >
	 </div>			
		
	 <div class="form-group">
	     <label for="email">Email address:</label>
		 <input type="email" class="form-control" id="email" name="email"  required  value="<?php echo $email; ?>" >
     </div> 
     
	 <div class="form-group">
	     <label for="phone">Phone No:</label>
		 <input type="tel" class="form-control" id="phone" name="phone"  required  value="<?php echo $phone; ?>">
     </div> 
     
	 	 <div class="form-group">
	     <label for="adhaar">Adhaar Number:</label>
		 <input type="number" class="form-control" id="adhaar" name="adhaar"  required  value="<?php echo $adhaar; ?>">
     </div>

     <div class="form-group">
	     <label for="">regno:</label>
		 <input type="text" class="form-control" id="regno" name="regno"  required  value="<?php echo $regno; ?>">
     </div>

     <div class="form-group">
	     <label for="district">District:</label>
		 <input type="text" class="form-control" id="district" name="district"  required  value="<?php echo $district; ?>">
	 </div>
</div>
<div class="col-6">

	 <div class="form-group">
	     <label for="taluk">Taluk:</label>
		 <input type="text" class="form-control text-capitalize" id="taluk" name="taluk"  required  value="<?php echo $taluk; ?>">
     </div>
     
	 <div class="form-group">
	     <label for="id">Vehicle Name:</label>
		 <input type="text" class="form-control text-capitalize" id="vname" name="vname"  required  value="<?php echo $vname; ?>">
     </div>

	 <div class="form-group">
	     <label for="id">Vehicle Model:</label>
		 <input type="text" class="form-control text-capitalize" id="vmodel" name="vmodel"  required  value="<?php echo $vmodel; ?>">
     </div>

     <div class="form-group">
         <label for="">Vehicle Type</label>
         <input type="text" name="vt" id="vt" class="form-control text-capitalize" required  value="<?php echo $vtype?>">
     </div>

     <div class="form-group">
         <label for="">Fuel Type</label>
         <input type="text" name="ftype" id="ftype" class="form-control text-uppercase" required  value="<?php echo $ftype?>">
     </div>


    </div>
</div>
<div class="row justify-content-center">
<div class="form-group">
        <input type="submit" name="update" value="Update ID" class="form-control btn btn-success">
    </div> &nbsp;
<div class="form-group">
        <input type="submit" name="cancel" value="Cancel" class="form-control btn btn-primary">
    </div>
</div>
</form>
<br>

<?php
if(isset($_POST['cancel'])){
    echo "<script>window.location.href='vehicleDetails.php'</script>";
} ?>


<?php
$id=$_GET['id'];
if(isset($_POST['update'])){
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $adhaar=$_POST['adhaar'];
    $phone=$_POST['phone'];
    $regno=$_POST['regno'];
    $district=$_POST['district'];
    $taluk=$_POST['taluk'];
    $vname=$_POST['vname'];
    $vmodel=$_POST['vmodel'];
    $vtype=$_POST['vt'];
    $ftype=$_POST['ftype'];

	$update="update vreg_tb set  oname='$name',oemail='$email',ophone='$phone',oadhaar='$adhaar',regno='$regno',district='$district', taluk='$taluk', vname='$vname', vtype='$vtype', vmodel='$vmodel',ftype='$ftype' where id='$id'";
    $run=$conn->query($update);
    if($run){
        echo "<script>alert('vehicle Details Updated Successfully');</script>";
        echo "<script>window.location.href='vehicleDetails.php'</script>";
    } else {
        echo "<h3 class='text-danger text-center'>Something Went Wrong</h3>";
    }
}
?>