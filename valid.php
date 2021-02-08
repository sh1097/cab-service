<?php
session_start();
// echo  $_SESSION['otp'];
// echo $_GET['otp'];

    $newotp= $_GET['otp'];
    if($newotp== $_SESSION['otp']){
        echo "yes";
    }
    else{
        echo "no";
    }
   
    ?>