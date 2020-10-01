<?php
session_start();
include("../includes/driverLoginHeader.php");
?>


<?php
error_reporting(0);

include('../includes/db.php');
if(!$_SESSION['email']){
     header("location:../driverLogin.php"); 
     }
if(isset($_POST['submit']))
{
     $name=$_POST['name']; 
     $email=$_POST['email'];
     $dl=$_POST['dl'];  
     $adhaar=$_POST['adhaar'];
     $message=$_POST['message'];
        $insert="insert into dquery_tb (name,email,dl,adhaar,message) values ('$name','$email','$dl','$adhaar','$message')";
        $run=$conn->query($insert);
      if($run)
        {
            $msg="Your info submitted successfully";
            }
        else 
        {
            $error="Something went wrong. Please try again";
        }
}
?>



        <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    </style>
<br>
<div class="container">
<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="driverHome.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">Query</li>
</ol>  

<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?> 

<?php
include("../includes/db.php");
$email=$_SESSION['email'];
$select="select * from dreg_tb where email='$email'";
$run1=$conn->query($select);
if($run1->num_rows>0){
    while($row=$run1->fetch_array()){
        $user_name=$row['fname'];
        $user_email=$row['email'];
        $user_dl=$row['dl_number'];
        $user_adhaar=$row['adhaar'];
    }
}
?>




<form name="query" method="POST">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:green">*</span></div>
<div><input type="text" name="name" class="form-control text-uppercase" required value="<?php echo $user_name; ?>" readonly></div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id<span style="color:green">*</span></div>
<div><input type="email" name="email" class="form-control" required value="<?php echo $user_email; ?>" readonly></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">D L Number<span style="color:green">*</span></div>
<div><input type="text" name="dl" class="form-control text-uppercase" required value="<?php echo $user_dl; ?>" readonly></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Adhaar<span style="color:green">*</span></div>
<div><input type="text" name="adhaar" class="form-control" required value="<?php echo $user_adhaar; ?>" readonly></div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Message<span style="color:red">*</span></div>
<div><input type="text" name="message" class="form-control" placeholder="Enter your message" required></textarea></div>
</div>
</div>

<br>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>

</form>  

</div>



