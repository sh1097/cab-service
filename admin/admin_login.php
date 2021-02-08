<?php
// if(isset($_POST['login'])){
$email=$_POST['email'];
echo $email;
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', ' ','cedcab');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM tbl_user WHERE email_id =='$email'and password=='$password'";
 
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($result);

    if($email=="admin@gmail.com" && $password=="Password123$"){
        echo "<h1>admin</h1>";
        echo "admin login";
    }
  else{
      echo "customer login";
  }


// $email=$_POST['email'];
// echo $email;
// $password = $_POST['password'];
// echo $password;

?>