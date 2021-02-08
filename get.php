<?php
session_start();
echo  $_SESSION['otp'];
echo $_POST['otp'];

    $newotp= $_POST['otp'];
    if($newotp== $_SESSION['otp']){
        echo "yes";
    }
    else{
        echo "no";
    }
   
    ?>