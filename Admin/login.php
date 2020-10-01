<?php
session_start();
?>

<link rel="stylesheet "href="css/bootstrap.min.css" />
<script src="js/all.js"></script>

<?php
require("includes/db.php");
$error="";
$success="";
if(isset($_POST['login']))
{

	 $user_email=$_POST['email'];
	 $user_password=$_POST['password'];
	    $select="select * from admin_tb where email='$user_email' and password='$user_password'"; //checks the database for email and password
	    $run=$conn->query($select);
		  if($run->num_rows>0){
		      while($row=$run->fetch_array()){
			     $_SESSION['email']=$user_email=$row['email']; //session is a global variable they're pre defined. they're used for sessions i.e., when a user exites the window or a site., he will bw logged out for privacy reasons. to do that we use sessions.
				
				 $success="Logged In Succesfully...";
				 header("location:home.php"); //we can also use.. echo"<script>window.location.href='welcome.php'</script>"; 
			}
	 } 
	 else{
		    $error="Invalid Email or Password!!";
		   }	   
}

?>


  <div class="container">


	        <h1 class="mt-4 mb-3">Login <medium>Page</medium></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
	 <div class="row justify-content-center align-content-center">	 
	    <div class="col-sm-8 col-sm-offset-2 bg-transparent alert alert-success" style="box-shadow:2px 2px 2px 2px gray;">
		<h4 class="text text-center alert bg-primary" style="color:white">Admin Login</h4>
		<h5 class="text text-center text-danger"><?php
		if($error!=""){
			echo $error;
		}
		?></h5>
		<h5 class="text text-center text-success"><?php
		if($success!=""){
			echo $success;
		}
		
		?></h5>
		<form method="post">
	 <div class="form-group">
	     <label for="name">Email:</label>
		 <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required value="">
	 </div>
	 <div class="form-group">
	     <label for="password">Password:</label>
		 <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required value="">
		 <input type="checkbox" onclick="check()"><span class="fas fa-eye"></span>
	 </div>	 
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block" name="login">Login</button>
      </div>
  
  </div>
  </form>

		<script>
			function check() {
				let x = document.getElementById('password');
				if(x.type === 'password') {
					x.type = 'text';
				} else {
					x.type = 'password';
				}
			}
		</script>


</body>
</html>
