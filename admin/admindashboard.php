<?php session_start(); 

$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";

$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);
$sql = "SELECT *  FROM tbl_user";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);

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
?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

<style>
.card {
    background-color: #4C516D;
    width: 20%;
    color: white;
    margin: 10px 10px 10px 50px;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
}
  .info:hover {
    background: #2196F3;
    color: white;
  }
  .nav-link{
      color:white;
  }
  .btn{
    color: #17a2b8;
    border-color: #17a2b8;
}


    </style>
  </head>



<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <a class="navbar-brand"  style="color:white;" href="../index.php">cedcab</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  style="color:white;"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Location
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="servicable.php">Location List</a>
          <a class="dropdown-item" href="addlocation.php">Add Location</a>
   
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color:white;">Book A Ride <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" style="color:white;"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Rides
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="pending.php">Pendindg Rides</a>
          <a class="dropdown-item" href="completeride.php">Completed Rides</a>
     <a class="dropdown-item" href="All Rides.php"> All Rides</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  style="color:white;"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accounts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="editprofile.php">update informations</a>
          <a class="dropdown-item" href="adminpassword.php">change Password</a>
   
      </li>

    </ul>
    <form class="form-inline ">
    <p style="color:white;font-size:20px; margin-top:10%;">  <?php if(isset($_SESSION['admin'])){echo $_SESSION['admin'];} ?></p>
      <button class="btn btn-outline-info"  type="submit"><a href="../logout.php" >Logout</a></button>
    </form>
  </div>
</nav>
</div>
    <div style="padding-top:5%">
<div class="container">
 <div class="row ">
 <div class="col-sm-3 ">
     <div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">Pending Rides</h5>
   
    <p class="card-text"><? if(isset($_SESSION['alpending'])){echo $_SESSION['alpending'];}?></p>
    <a href="pending.php" class="card-link">
        <button class="btn btn-outline-info py-2 px-2" value="Ride Requests" >Ride Requests</button>
    </a>
  </div>
</div>

     </div>
     <div class="col-sm-3 ">
     <div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">complete Rides</h5>
   
    <p class="card-text"><? if(isset($_SESSION['all completed'])){echo $_SESSION['all completed'];}?></p>
    <a href="completeride.php" class="card-link">
        <button class="btn btn-outline-info py-2 px-2  " value="Ride Requests" ><i style='font-size:10px;' >Completed Rides</i></button>
    </a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">Cancelled Rides</h5>

    <p class="card-text"><? if(isset($_SESSION['cancel'])){echo $_SESSION['cancel'];}?></p>
    <a href="cancelrides.php" class="card-link">
        <button class="btn btn-outline-info py-2 px-2" value="Ride Requests" >cancel Rides</button>
    </a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">All Rides</h5>
  
    <p class="card-text"><? if(isset($_SESSION['all rides'])){echo $_SESSION['all rides'];}?></p>
    <a href="All Rides.php" class="card-link">
        <button class="btn btn-outline-info py-2 px-2" value="Ride Requests" >ALL Rides</button>
    </a>
  </div>
</div>
</div>
 </div>
</div>


</div>
<div style="padding-top:5%;">
<div class="container">
 <div class="row">
     <div class="col-sm-3">
     <div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title" style="font-size:14px;">Pending User Requests</h5>
    <p class="card-text"><? if(isset($_SESSION['penduser'])){echo $_SESSION['penduser'];}?></p>
    <a href="All Rides.php" class="card-link"> 
    <a href="pendinguser.php" class="card-link"><button class="btn btn- outline-info py-1 px-1" value="Ride Requests" >Pending Users Requests</button>
</a>
  </div>
</div>

     </div>

     <div class="col-sm-3">
     <div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <p class="card-title" style="font-size:14px;" >Approved User Requests</p>
    <p class="card-text"><? if(isset($_SESSION['appuser'])){echo $_SESSION['appuser'];}?></p>
    <a href="All Rides.php" class="card-link">   
    <a href="approveduser.php" class="card-link"> <button class="btn btn-outline-info py-1 px-2" value="Ride Requests" >Approved  Requests</button>
</a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 15rem ;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title" >All users</h5>

    <p class="card-text"><? if(isset($_SESSION['all user'])){echo $_SESSION['all user'];}?></p>

    <a href="all users.php" class="card-link">  <button class="btn btn-outline-info py-1 px-2" value="Ride Requests" >All Users</button>
</a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <p class="card-title">Servicable Locations</p>
    
    <p class="card-text"><? if(isset($_SESSION['service'])){echo $_SESSION['service'];}?></p>
    <a href="servicable.php" class="card-link">
        <button class="btn btn-outline-info py-2 px-2" value="Ride Requests" style="font-style:13px"; >Servicable_Loc </button>
  </div>
</div>
</div>
 </div>
</div>
<div>
    <?php include '../footer2.php' ?>

</div>
</body>
</html>
