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
    <li class="breadcrumb-item active" id="mini">Driver Details</li>
</ol>


<div class="row justify-content-center align-content-center">

    <table class="display table-active table-transparent table-bordered" width="90%">
		<thead>
			<tr class="text-capitalize">
				<th>sl.no</th>
				<th class="text-capitalize">full name</th>
                <th class="text-capitalize">user name</th>
                <th class="text-capitalize">email</th>
                <th class="text-capitalize">phone</th>
                <th class="text-capitalize">adhaar</th>
                <th class="text-capitalize">gender</th>
				<th class="text-capitalize">dob</th>
				<th class="text-capitalize">district</th>
				<th class="text-capitalize">taluk</th>
				<th class="text-capitalize">address</th>
				<th class="text-capitalize">vehicle type</th>
				<th class="text-capitalize">dl number</th>
				<th class="text-capitalize">action</th>
			</tr>
		</thead>
		<tbody>

        
<?php
require("../includes/db.php");
$select="select * from dreg_tb";
$run=$conn->query($select);
if($run->num_rows>0){
$total=0;
while($row=$run->fetch_array()){
$total=$total+1;
$id=$row['id'];
?>
<tr class="text-uppercase">
<td><?php echo $total; ?>&nbsp;</td>
<td><?php echo $row['fname'];?>&nbsp;</td>
<td><?php echo $row['uname'];?>&nbsp;</td>
<td><?php echo $row['email'];?>&nbsp;</td>
<td class=" bg-primary"><?php echo $row['phone'];?>&nbsp;</td>
<td class=" bg-secondary"><?php echo $row['adhaar'];?>&nbsp;</td>
<td><?php echo $row['gender'];?>&nbsp;</td>
<td><?php echo $row['dob'];?>&nbsp;</td>
<td><?php echo $row['district'];?>&nbsp;</td>
<td><?php echo $row['taluk'];?>&nbsp;</td>
<td><?php echo $row['address'];?>&nbsp;</td>
<td><?php echo $row['veh_type'];?>&nbsp;</td>
<td><?php echo $row['dl_number'];?>&nbsp;</td>
<td><a href="detailsUpdate.php?id=<?php echo $id; ?>">Update</a>/<a href="deleteDriver.php?id=<?php echo $id;?>">delete</a></td>
</tr>
<?php
										}
									}
										?>
										</tr>
										
										
									</tbody>
								</table>