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
      p{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: yellow;
        font-size: 2rem;
;

        
      }
    </style>
</head>
<body style="background-image: url('images/about.jpeg'); background-repeat:no-repeat; background-size:100% 100vh;">
    <br>
<div class="container py-0">
 
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
            <li class="drop-down"><a href="">Log in</a>
              <ul>
                <li><a href="driverLogin.php">Driver</a></li>
                <li><a href="vehicleLogin.php">Vehicle</a></li>
                <li><a href="customerLogin.php">Customer</a></li>
              </ul>
            </li>
            <li class="active"><a href="contact.php">Contact</a></li>

          </ul>
        </nav>
    </div>
</div>



    <div class="container bg-transparent">
    <h1 class="mt-4 mb-3"> <small>About</small> </h1>

<ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active" id="mini">About</li>
</ol>
    <h1 class="text-warning text-center" style="font-size: 3rem;">I'm Thor</h1>
        <p class="text-center">
            Email: test@test.com
        </p>    
        <p class="text-center">
            contact: 9876543102
        </p>
    </div>

</body>
</html>