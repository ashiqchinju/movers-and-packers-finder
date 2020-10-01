<?php
  session_start();
?>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbar.css">
<script src="js/all.js"></script>
<script src="js/password.js"></script>
</head>

<?php
require("./includes/db.php");
$error="";
$success="";
if(isset($_POST['login']))
{
	 $user_email=$_POST['email'];
	 $user_password=$_POST['password'];
	    $select="select * from dreg_tb where email='$user_email' and password='$user_password'"; 
	    $run=$conn->query($select);
		  if($run->num_rows>0){
		      while($row=$run->fetch_array()){
				 $_SESSION['email']=$user_email=$row['email'];
				 $success="Logged In Successfully...";
				 header("location:./driver/driverHome.php"); //we can also use.. echo"<script>window.location.href='welcome.php'</script>"; 
			}
	 } 
	 else{
    $error="Invalid Email or Password!!";
		   }	   
}
?>


<body  style="background-image: url('images/login.jpg'); background-repeat:no-repeat; background-size:100% 100vh;">
    <div class="container py-0">
    <br>
    <div class="row justify-content-center align-content-center">

     <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>

            <li class="drop-down"><a href="">Sign Up</a>
              <ul>
                <li><a href="driverReg.php">Driver</a></li>
                <li><a href="vehicleOwn.php">Vehicle</a></li>
                <li><a href="customerReg.php">Customer</a></li>
              </ul>
            </li>
            <li class="drop-down active"><a href="">Log in</a>
              <ul>
                <li class="active"><a href="driverLogin.php">Driver</a></li>
                <li><a href="vehicleLogin.php">Vehicle</a></li>
                <li><a href="customerLogin.php">Customer</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>

          </ul>
        </nav>
    </div>
    <h1 class="mt-4 mb-3"> <small>Driver Login</small> </h1>

<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Driver Login</li>
</ol>
    
    <div class="row justify-content-center align-content-center">
    <div class="col-sm-8 col-sm-offset-2 bg-transparent alert-success" style="box-shadow:2px 2px 2px 2px gray;">
    <h4 class="text text-center alert bg-primary" style="color:white">Driver Login</h4>
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
	     <label for="email">Email address / Username :</label>
		 <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email or Usrename" required value="">
	 </div>
	 <div class="form-group">
	     <label for="password">Password:</label>
		 <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required value="">
		 <input type="checkbox" onclick="myFunction()"><span class="fas fa-eye"></span>
	 </div>	
	 <a href="change.php">Forgot Password?</a> 
	 <br><br>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block" name="login">Login</button>
      </div>
  
  </div>
  </form>
    </div>

    </div>
</body>