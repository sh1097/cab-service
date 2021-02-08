<?php session_start();
$uppass=$_POST['uppass'];
$updatenumber=$_POST['upnum'];
$x=$_SESSION['id'];
echo $x;
$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";

$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);
$email= mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$sql="select * from tbl_user ";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $check = mysqli_fetch_array($result);
    if($check['is_admin']==0){
    echo $check['user_id'];
    }
}



?>