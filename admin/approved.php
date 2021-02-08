<?php session_start();
 include '../connect.php';

if(isset($_GET['accept'])){
 $acc=$_GET['accept'];


 $sql1="UPDATE tbl_ride set status=2 WHERE Ride_id='$acc'";
 $result = mysqli_query($con,$sql1);
echo "<script>alert('your request is approved');</script>";
header('location:admindashboard.php');

}

if(isset($_GET['del'])){
    $acc=$_GET['del'];

   
    $sql1="UPDATE tbl_ride set status=0 WHERE Ride_id='$acc'";
    $result = mysqli_query($con,$sql1);
    echo "<script>alert('ride location is deleted');</script>";
    header('location:admindashboard.php');
   }

   if(isset($_GET['del'])){
    $acc=$_GET['del'];

   
    $sql1="UPDATE tbl_location set is_available=0 WHERE id='$acc'";
    $result = mysqli_query($con,$sql1);
    header('location:admindashboard.php');
   
   }
   if(isset($_GET['allow'])){
    $acc=$_GET['allow'];

   
    $sql1="UPDATE tbl_user set status=1  WHERE user_id='$acc'";
    $result = mysqli_query($con,$sql1);
    header("location:'admindashboard.php'");
   
   }