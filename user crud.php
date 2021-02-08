<?php 
 session_start();
 $servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";
$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);
$sql = "SELECT *  FROM tbl_user  ";

	// initialize variables
	$email_id= "";
	$name = "";
   $mobile= "";
   $password = "";
	$id = 0;
    $update = false;
 
  

	if (isset($_POST['signin'])) {
		$email_id= $_POST['email'];
		$name = $_POST['name'];
	   $mobile= $_POST['mobile'];
	   $password = $_POST['password'];

	   $sql = "INSERT INTO tbl_user (email_id,name,mobile,status,password,
	   is_admin)
   VALUES ('$email_id', '$name', '$mobile',1,'$password',
	   0)"; 
		$_SESSION['message'] = "Address saved"; 
		header('location: dbase.php');
    }

    if (isset($_POST['accept'])) {
		$id = $_GET['accept'];
    	
    
        mysqli_query($con, "UPDATE tbl_user  SET  status=2  WHERE user_id='$id' ");
        $_SESSION['message'] = "Ride Is Confirmed"; 
	
    }
    
    
  if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM tbl_user  WHERE user_id='$id' ");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: dbase.php');
}if(isset($_GET['allow'])){
	$acc=$_GET['allow'];
   
   
	$sql1="UPDATE tbl_ride set status=2 WHERE Ride_id='$acc'";
	$result = mysqli_query($con,$sql1);
   echo "<script>alert('your request is approved');</script>";
}