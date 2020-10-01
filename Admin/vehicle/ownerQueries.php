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
    <li class="breadcrumb-item active" id="mini">Driver Queries</li>
</ol>
<div class="row align-align-content-center justify-content-center">	
<table class="display table-active table-dark table-bordered" width="90%">
		<thead>
			<tr class="text-capitalize">
				<th>sl.no</th>
				<th class="text-capitalize">full name</th>
                <th class="text-capitalize">email</th>
                <th class="text-capitalize">adhaar</th>
				<th class="text-capitalize">message</th>
				<th class="text-capitalize">action</th>
			</tr>
		</thead>
		<tbody>
				
        <?php
require("../includes/db.php");
$select="select * from vquery_tb";
$run=$conn->query($select);
if($run->num_rows>0){
$total=0;
while($row=$run->fetch_array()){
$total=$total+1;
$id=$row['id'];
?>
<tr class="text-uppercase">
<td><?php echo $total; ?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['adhaar'];?></td>
<td><?php echo $row['message'];?></td>
<td><a href="queryUpdate.php?id=<?php echo $id; ?>">Update</a></td>
</tr>
<?php
										}
                                    } else {
                                        echo "<tr><td colspan='7' class='text-center'><h2>no queries</h2></td></tr>";
                                    }
                                    
										?>
										</tr>
										
										
									</tbody>
								</table>

						
                <br>
               
						
						
						

						</div>
					</div>
					
			</div>
			<div class="col-sm-6">			
			</div>
		</div>
	</body>	
</html>	




