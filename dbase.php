<?php
session_start();
$email_id= $_POST['email'];
 $name = $_POST['name'];
$mobile= $_POST['mobile'];
$password = $_POST['password'];
$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";
$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }
    else{
        $sql = "INSERT INTO tbl_user (email_id,name,mobile,status,password, is_admin)
     VALUES ('$email_id', '$name', '$mobile',0,'$password', 0)";  
    }
    if ($con->query($sql) === TRUE) {
        echo " successfully registered";
        } 
?>
