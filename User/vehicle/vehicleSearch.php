<?php
    session_start();
    include("../includes/vehicleLoginHeader.php");
    if(!$_SESSION['email']){
        echo"<script>window.location.href='../vehicleLogin.php'</script>"; 
    }
?>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="vehicleHome.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Search</li>
</ol> 
<div class="row justify-content-center align-content-center">
        <form action="" method="POST">
            <div class="form-group">
                <label for="voter id">Enter Vehicle Register Number:</label>
                <input type="text" name="regno" id="regno" class="form-control text-uppercase" placeholder="register number" required value="" minlength="9" maxlength="10" size="10" >
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
                <th class="text-capitalize">adhaar</th>
				<th class="text-capitalize">register number</th>
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
$search=$_POST['regno'];


$check="select * from vreg_tb where regno='$search'";
$ch=$conn->query($check);
if($ch->num_rows>0){
    $total=0;
while($row=$ch->fetch_array()){
    $total=$total+1;
    $regno=$row['regno'];

?>
<tr>
<td><?php echo $total; ?></td>
<td class="text-uppercase"><?php echo $row['oname']; ?></td>
<td><?php echo $row['oemail']; ?></td>
<td><?php echo $row['oadhaar']; ?></td>
<td><?php echo $row['regno'];?></td>
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