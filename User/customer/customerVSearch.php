<head>
    <script src="../js/taluk.js"></script>
</head>
<?php
session_start();
if(!$_SESSION['email']){
    header("location:../customerLogin.php");
}
include("../includes/customerLoginHeader.php");
?>
<br>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="customerHome.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Vehicle Search</li>
</ol> 
<div class="row justify-content-center align-content-center">
        <form action="" method="POST">

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
                <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <div class="row justify-content-center align-content-center">
    <table class="display table-active table-dark table-bordered" width="100%">
		<thead>
			<tr class="text-capitalize ">
				<th>sl.no</th>
				<th class="text-capitalize">owner name</th>
                <th class="text-capitalize">owner email</th>
                <th class="text-capitalize">phone</th>
				<th class="text-capitalize">register number</th>
				<th class="text-capitalize">district</th>
				<th class="text-capitalize">taluk</th>
				<th class="text-capitalize">vehicle name</th>
				<th class="text-capitalize">vehicle model</th>
				<th class="text-capitalize">vehicle type</th>
				<th class="text-capitalize">fuel type</th>
			</tr>
		</thead>
		<tbody>
<?php 
require("../includes/db.php");
if(isset($_POST['submit'])){
$search1=$_POST['district'];
$search2=$_POST['taluk'];
$search3=$_POST['veh_type'];


$check="select * from vreg_tb where district='$search1' and taluk='$search2' and vtype='$search3'";
$ch=$conn->query($check);
if($ch->num_rows>0){
    $total=0;
while($row=$ch->fetch_array()){
    $total=$total+1;

?>
<tr>
<td><?php echo $total; ?></td>
<td class="text-uppercase"><?php echo $row['oname']; ?></td>
<td><?php echo $row['oemail']; ?></td>
<td><?php echo $row['ophone']; ?></td>
<td><?php echo $row['regno'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['taluk'];?></td>
<td><?php echo $row['vname'];?></td>
<td><?php echo $row['vmodel'];?></td>
<td><?php echo $row['vtype'];?></td>
<td><?php echo $row['ftype'];?></td>

</tr>
<?php
}
} else {
    echo "<script>alert('vehicle  number does not exist');</script>";
}
}

?>
		</tbody>
    </table>
    



       
    </div>
    <br>

   

    </div>