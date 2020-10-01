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
    <li class="breadcrumb-item active" id="mini">Owner Details</li>
</ol>
</div>
<div class="row justify-content-center align-content-center">
    <table class="display table-active table-dark table-bordered" width="90%">
		<thead>
			<tr class="text-capitalize">
				<th>sl.no</th>
				<th class="text-capitalize">full name</th>
                <th class="text-capitalize">user name</th>
                <th class="text-capitalize">email</th>
                <th class="text-capitalize">phone</th>
                <th class="text-capitalize">adhaar</th>
                <th class="text-capitalize">gender</th>
				<th class="text-capitalize">district</th>
				<th class="text-capitalize">taluk</th>
				<th class="text-capitalize">address</th>
				<th class="text-capitalize">action</th>
			</tr>
		</thead>
		<tbody>

        
<?php
require("../includes/db.php");
$select="select * from voreg_tb";
$run=$conn->query($select);
if($run->num_rows>0){
$total=0;
while($row=$run->fetch_array()){
$total=$total+1;
$id=$row['id'];
?>
<tr class="text-uppercase">
<td><?php echo $total; ?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['uname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['adhaar'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['taluk'];?></td>
<td><?php echo $row['address'];?></td>
<td><a href="ownerUpdate.php?id=<?php echo $id; ?>">Update</a>&nbsp;/&nbsp;<a href="ownerDelete.php?id=<?php echo $id;?>">Delete</a></td>
</tr>
<?php
										}
									}
										?>
										</tr>
										
										
									</tbody>
								</table>