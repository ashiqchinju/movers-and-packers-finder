<!DOCTYPE html>
<html>
<head>
<title>Onboarding of vehicle with logistics </title>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet "href="css/bootstrap.min.css" />
<link rel="stylesheet "href="css/navbar.css" />
<script src="js/all.js"></script>
</head>
<body>







<div class="container py-0">
    <br>
    <div class="row justify-content-center align-content-center">

     <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="home.php">Home</a></li>

            <li class="drop-down"><a href="">Driver</a>
              <ul>
                <li><a href="driver/driverDetails.php">Driver Details</a></li>
                <li><a href="driver/driverQueries.php">Queries</a></li>

              </ul>
            </li>
            <li class="drop-down"><a href="">Vehicle</a>
              <ul>
                <li class="drop-down"><a href="#">Details</a>
                <ul>
                <li><a href="vehicle/vehicleDetails.php">vehicles Details</a></li>
                <li><a href="vehicle/ownerDetails.php">Owner Details</a></li>
                </ul>
                </li>
                <li class="drop-down"><a href="">Add</a>
                  <ul>
                    <li><a href="vehicle/addVehicle.php">Vehicle</a></li>
                    <li><a href="vehicle/addOwner.php">Vehicle Owner</a></li>
                  </ul>
                </li>
                <li><a href="vehicle/vehicleQueries.php">Queries</a></li>

              </ul>
            </li>
            <li class="drop-down"><a href="">Customer</a>
              <ul>
                <li><a href="customer/customerDetails.php">Customers Details</a></li>
                <li><a href="customer/addCustomer.php">Add Customer</a></li>
                <li><a href="customer/customerQueries.php">Queries</a></li>

              </ul>
            </li>
            <li class="drop-down"><a href="">Admin</a>
              <ul>
                <li><a href="admin/addAdmin.php">Add Admin</a></li>
                <li><a href="admin/adminDetails.php">Admin Details</a></li>
                <li><a href="admin/passwordChange.php">Change Password</a></li>
              </ul>
            </li>
            <li><a href="adminLogout.php">Logout</a></li>
           

          </ul>
        </nav>
    </div>
</div>
         


</body>
</html>