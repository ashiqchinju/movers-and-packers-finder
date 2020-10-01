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
    <li class="breadcrumb-item active" id="mini">vehicle Details</li>
</ol>
</div>
<div class="row justify-content-center align-content-center">
    <table class="display table-active table-dark table-bordered" width="90%">
		<thead>
			<tr class="text-capitalize">
				<th>sl.no</th>
				<th class="text-capitalize">owner name</th>
                <th class="text-capitalize">email</th>
                <th class="text-capitalize">adhaar</th>
                <th class="text-capitalize">phone</th>
                <th class="text-capitalize">regno</th>
				<th class="text-capitalize">district</th>
				<th class="text-capitalize">taluk</th>
				<th class="text-capitalize">vname</th>
				<th class="text-capitalize">vmodel</th>
				<th class="text-capitalize">vtype</th>
				<th class="text-capitalize">ftype</th>
			</tr>
		</thead>
		<tbody>

        
<?php
require("../includes/db.php");
$select="select * from vreg_tb";
$run=$conn->query($select);
if($run->num_rows>0){
$total=0;
while($row=$run->fetch_array()){
$total=$total+1;
$id=$row['id'];
?>
<tr class="text-uppercase">
<td><?php echo $total; ?></td>
<td><?php echo $row['oname'];?></td>
<td><?php echo $row['oemail'];?></td>
<td><?php echo $row['oadhaar'];?></td>
<td><?php echo $row['ophone'];?></td>
<td><?php echo $row['regno'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['taluk'];?></td>
<td><?php echo $row['vname'];?></td>
<td><?php echo $row['vmodel'];?></td>
<td><?php echo $row['vtype'];?></td>
<td><?php echo $row['ftype'];?></td>
<td><a href="vUpdate.php?id=<?php echo $id; ?>">Update</a>/<a href="vDelete.php?id=<?php echo $id;?>">delete</a></td>
</tr>
<?php
										}
									}
										?>
										</tr>
										
										
									</tbody>
								</table>