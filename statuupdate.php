<? include 'connect.php'?>
<?php
session_start();
$sql="select*from tbl_ride ";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
      $check = mysqli_fetch_array($result);
    $_SESSION['id']=$check['Ride_id'];
   $x= $_SESSION['id'];
   echo $x;


  
     
  
}

