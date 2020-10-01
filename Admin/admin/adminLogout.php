<?php
    session_start();
    include("../includes/loginHeader.php");
    unset($_SESSION['email']);
    session_destroy();
    header("location:../login.php");
?>
