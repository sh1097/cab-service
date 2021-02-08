

<?
session_start();
$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";
$from=$_POST['from'];
$to=$_POST['to'];
$dist=$_POST['temp'];
$cab=$_POST['cab'];
 $weigh=$_POST['weigh'];
 $fare=$_POST['inp'];



$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }
    else{ 
        $sql = "INSERT INTO tbl_ride( From_loc,To_loc,Total_distance,Luggage,Total_fare,Status,Customer_user_id,Cab_type )
       
     VALUES ('$from', '$to', '$dist','$weigh','$fare',1,1,'$cab')";  

    }
    if ($con->query($sql) === TRUE) {
        echo "<script>alert('need admin approval');</script>;
       <script> window.location.href='login.php';</script>";  

         }



        