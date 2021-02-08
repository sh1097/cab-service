<?php session_start();
$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";

$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);




$sql = "SELECT  Status, sum(Total_fare) as 'total'FROM tbl_ride WHERE status=2";
 

 
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $check = mysqli_fetch_array($result);
     $check['total'];
    $_SESSION['fare']=$check['total'];



}

$sql="select count(*) from tbl_ride";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
  $_SESSION['all rides']=$row[0];



$sql="select count(*) from tbl_ride WHERE status=2";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
  $_SESSION['all completed']=$row[0];


$sql="select count(*) from tbl_ride WHERE status=1";
$result=mysqli_query($con,$sql);
$row1=mysqli_fetch_array($result);
$_SESSION['alpending']=$row1[0];



$sql="select count(*) from tbl_ride WHERE status=0";
$result=mysqli_query($con,$sql);
$row2=mysqli_fetch_array($result);
$_SESSION['cancel']=$row2[0];
  
$sql="select count(*) from tbl_location WHERE is_available=1";
$result=mysqli_query($con,$sql);
$row3=mysqli_fetch_array($result);
  $_SESSION['service']=$row3[0];

 $sql="select count(*) from tbl_user ";
$result=mysqli_query($con,$sql);
$row4=mysqli_fetch_array($result);
 $_SESSION['all user']=$row4[0];


 $sql="select count(*) from tbl_user where status=0 ";
 $result=mysqli_query($con,$sql);
 $row6=mysqli_fetch_array($result);
   $_SESSION['penduser']=$row6[0];


  $sql="select count(*) from tbl_user where status=1 ";
  $result=mysqli_query($con,$sql);
  $row5=mysqli_fetch_array($result);
    $_SESSION['appuser']=$row5[0];

