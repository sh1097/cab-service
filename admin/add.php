<?php
session_start();
$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";

$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);
$email= mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);



$sql = "SELECT *  FROM tbl_user WHERE email_id ='$email'and password='$password' ";
 
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $check = mysqli_fetch_array($result);
   
    if($check['is_admin']==1){
     $_SESSION['admin']="Hi Admin";
     $_SESSION['user_id']=$check['user_id'];
      header('location:admindashboard.php');
     echo "admin ";
   
    }
    if($check['is_admin']==0){
      $_SESSION['userlogin']="Hi user";
      $_SESSION['user_id']=$check['user_id'];
        header('location:../userdashboard.php');
    }
    
}
else{
    echo "firstly register!!!";
    header('location:../signup.php');

  }
?>