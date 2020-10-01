<?php
session_start();
if(!$_SESSION['email']){
    header("location:login.php"); 
}
?>
<?php
include("includes/header.php");
?>
<br>
<br>
<br>
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 50vh;">

    <div class="row justify-content-center align-content-center">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/driver.jpg" alt="First slide"  style="height: 70vh;">
            <div class="carousel-caption d-none d-md-block">
                <h5>My Caption Title (1st Image)</h5>
                <p>The whole caption will only show up if the screen is at least medium size.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/vehicle.jpg" alt="Second slide"style="height: 70vh;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/customer.jpg" alt="Third slide" style="height: 70vh;">
        </div>
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
</div>