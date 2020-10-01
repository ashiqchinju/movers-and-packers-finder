<?php
session_start();
if(!$_SESSION['email']){
    header("location:../customerLogin.php");
}
include("../includes/customerLoginHeader.php");
?>
<br>
<br>
<br>

<style>
    #font {
        font-size: 1.2rem;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>

	
<div class="container">
	<div class="row justify-content-center align-content-center">
		<div class="col-sm-6">
		<h2 class="text text-center text-warning alert bg-secondary">Welcome User</h4>
		<ul id="font">
		  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, commodi. Vitae, eius.</i>
			</li>
		  <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod numquam eum in!</i>
			</li>
		  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, numquam suscipit?
		    </li>
		  <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, cumque.
			</li>
		  <li>
			<i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, aspernatur.</i>

		</ul>
		</div>
		<br>
		<div class="col-sm-6">
			<img src="../images/customer.jpg" class="img img-responsive img-thumbnail" style="height: 400px;">
		</div>
   </div>
   <br>
   <br>
   <br>


</div>