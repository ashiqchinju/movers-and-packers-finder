<!DOCTYPE>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <style>
    
    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /* Desktop Navigation */
    .nav-menu, .nav-menu * {
    margin: 0;
    padding: 0;
    list-style: none;
    }
    
    .nav-menu > ul > li {
    position: relative;
    white-space: nowrap;
    float: left;
    }
    
    .nav-menu a {
    display: block;
    position: relative;
    color: black;
    padding: 10px 15px;
    transition: 0.3s;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    }
    
    .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
    color: #009970;
    text-decoration: none;
    }
    
    
    .nav-menu .drop-down ul {
    display: block;
    position: absolute;
    left: 0;
    top: calc(100% + 30px);
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    padding: 10px 0;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: ease all 0.3s;
    }
    
    .nav-menu .drop-down:hover > ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
    }
    
    .nav-menu .drop-down li {
    min-width: 180px;
    position: relative;
    }
    
    .nav-menu .drop-down ul a {
    padding: 10px 20px;
    font-weight: 500;
    text-transform: none;
    color: black;
    }
    
    .nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
    color: #009970;
    }
    
    .nav-menu .drop-down > a:after {
    content: "\ea99";
    font-family: IcoFont;
    padding-left: 5px;
    }
    
    .nav-menu .drop-down .drop-down ul {
    top: 0;
    left: calc(100% - 30px);
    }
    
    .nav-menu .drop-down .drop-down:hover > ul {
    opacity: 1;
    top: 0;
    left: 100%;
    }
    
    .nav-menu .drop-down .drop-down > a {
    padding-right: 35px;
    }
    
    .nav-menu .drop-down .drop-down > a:after {
    content: "\eaa0";
    font-family: IcoFont;
    position: absolute;
    right: 15px;
    }
    
    @media (max-width: 1366px) {
    .nav-menu .drop-down .drop-down ul {
    left: -90%;
    }
    .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
    }
    .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
    }
    }
    
    /* Mobile Navigation */
    .mobile-nav-toggle {
    position: fixed;
    right: 15px;
    top: 15px;
    z-index: 9998;
    border: 0;
    background: none;
    font-size: 24px;
    transition: all 0.4s;
    outline: none !important;
    line-height: 1;
    cursor: pointer;
    text-align: right;
    }
    
    .mobile-nav-toggle i {
    color: #fff;
    }
    
    .mobile-nav {
    position: fixed;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    z-index: 9999;
    overflow-y: auto;
    background: #fff;
    transition: ease-in-out 0.2s;
    opacity: 0;
    visibility: hidden;
    border-radius: 10px;
    padding: 10px 0;
    }
    
    .mobile-nav * {
    margin: 0;
    padding: 0;
    list-style: none;
    }
    
    .mobile-nav a {
    display: block;
    position: relative;
    color: #36343a;
    padding: 10px 20px;
    font-weight: 500;
    outline: none;
    }
    
    .mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
    color: #009970;
    text-decoration: none;
    }
    
    .mobile-nav .get-started {
    text-align: center;
    }
    
    .mobile-nav .get-started a {
    background: #009970;
    color: #fff;
    border-radius: 50px;
    margin: 0 15px;
    padding: 10px 25px;
    display: inline-block;
    }
    
    .mobile-nav .get-started a:hover {
    background: #00c28e;
    color: #fff;
    }
    
    .mobile-nav .drop-down > a:after {
    content: "\ea99";
    font-family: IcoFont;
    padding-left: 10px;
    position: absolute;
    right: 15px;
    }
    
    .mobile-nav .active.drop-down > a:after {
    content: "\eaa1";
    }
    
    .mobile-nav .drop-down > a {
    padding-right: 35px;
    }
    
    .mobile-nav .drop-down ul {
    display: none;
    overflow: hidden;
    }
    
    .mobile-nav .drop-down li {
    padding-left: 20px;
    }
    
    .mobile-nav-overly {
    width: 100%;
    height: 100%;
    z-index: 9997;
    top: 0;
    left: 0;
    position: fixed;
    background: rgba(29, 28, 31, 0.6);
    overflow: hidden;
    display: none;
    transition: ease-in-out 0.2s;
    }
    
    .mobile-nav-active {
    overflow: hidden;
    }
    
    .mobile-nav-active .mobile-nav {
    opacity: 1;
    visibility: visible;
    }
    
    .mobile-nav-active .mobile-nav-toggle i {
    color: #fff;
    }
    
    /*--------------------------------------------------------------*/
    
    .mt-4{
        color: greenyellow;
    }
    
    
    #mini{
        color:whitesmoke;
    }

    p{
        font-size: 1.5rem;
        color: orange;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: italic;
    }
    </style>
</head>
<body style="background-image: url('images/hero-bg.jpg'); background-repeat:no-repeat; background-size:100% 100vh;">
    <br>
<div class="container py-0">
 
    <div class="row justify-content-center align-content-center">

     <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="about.php">About</a></li>

            <li class="drop-down"><a href="">Sign Up</a>
              <ul>
                <li><a href="driverReg.php">Driver</a></li>
                <li><a href="vehicleOwn.php">Vehicle</a></li>
                <li><a href="customerReg.php">Customer</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="">Log in</a>
              <ul>
                <li><a href="driverLogin.php">Driver</a></li>
                <li><a href="vehicleLogin.php">Vehicle</a></li>
                <li><a href="customerLogin.php">Customer</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>

          </ul>
        </nav>

    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="col">
            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, dolores! Provident illum, nostrum molestiae reprehenderit aspernatur dolore distinctio accusantium vel?</p>
            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, dolores! Provident illum, nostrum molestiae reprehenderit aspernatur dolore distinctio accusantium vel?</p>
            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, dolores! Provident illum, nostrum molestiae reprehenderit aspernatur dolore distinctio accusantium vel?</p>
            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, dolores! Provident illum, nostrum molestiae reprehenderit aspernatur dolore distinctio accusantium vel?</p>
        </div>
</div>