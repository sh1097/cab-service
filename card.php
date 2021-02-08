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
nav.sticky {
    position: sticky;
    top: 0;
}
.card{
    background-color: #607d8b;
    color:white;
}
.btn-outline-info {


    color: #17a2b8;
    border-color: #17a2b8;
}
.nav-link{
    color:white;
}
    
</style>
</head>
<body>
<div>


<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <a class="navbar-brand"  style="color:white;" href="index.php">cedcab</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Rides
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Ride Requests</a>
          <a class="dropdown-item" href="#">Ride Cancelled</a>
          <a class="dropdown-item" href="#">Ride Completed</a>
          <a class="dropdown-item" href="#"> All Rides</a>
      
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Pendind Users  Requests</a>
          <a class="dropdown-item" href="#">Pending Approval Requests</a>
     <a class="dropdown-item" href="#"> All Users</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Locations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Locations List</a>
          <a class="dropdown-item" href="#">All Locations</a>
   
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Change Password </a>
          <a class="dropdown-item" href="#">Edit profile</a>
       
      </li>
    </ul>
    <form class="form-inline ">
     <h6>HI Admin</h6>
      <button class="btn btn-outline-info" type="submit">Logout</button>
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
    <h5 class="card-title">Card title</h5>
   
    <p class="card-text">0</p> 
    <a href="#" class="card-link">
        <button class="btn btn-info py-1 px-2" value="Ride Requests" style=" color:black;">Ride Requests</button>
    </a>
  </div>
</div>

     </div>
     <div class="col-sm-3 ">
     <div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">Card title</h5>
   
    <p class="card-text">0</p>    
    <a href="#" class="card-link"> <button class="btn btn-info py-1 px-2" value="Ride Requests" style=" color:black;">Completed Rides</button>
</a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">Card title</h5>

    <p class="card-text">0</p>
    <a href="#" class="card-link">  <button class="btn btn-info  py-1 px-2" value="Ride Requests" style=" color:black;">Cancel Requests</button>
</a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">Card title</h5>
  
    <p class="card-text">0</p>  
    <a href="#" class="card-link"><button class="btn btn-info py-1 px-2" value="Ride Requests" style=" color:black;">All Rides</button>
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
    <h5 class="card-title">Card title</h5>
  
    <p class="card-text">0</p>   
    <a href="#" class="card-link">        <button class="btn btn-info py-1 px-2" value="Ride Requests" style=" color:black;">Pending Users Requests</button>
</a>
  </div>
</div>

     </div>

     <div class="col-sm-3">
     <div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">Card title</h5>
    
    <p class="card-text">0</p>   
    <a href="#" class="card-link"> <button class="btn btn-info py-1 px-2" value="Ride Requests" style=" color:black;">Pending Approval Requests</button>
</a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 15rem ;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">Card title</h5>

    <p class="card-text">0</p>

    <a href="#" class="card-link">  <button class="btn btn-info py-1 px-2" value="Ride Requests" style=" color:black;">All Users</button>
</a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 15rem;height:13rem">
  <div class="card-body text-center">
    <h5 class="card-title">Card title</h5>
    
    <p class="card-text">0</p>
    <a href="#" class="card-link"><button class="btn btn-info py-1 px-2" value="Ride Requests" style=" color:black;">Serviceable Locations</button>
</a>
  </div>
</div>
</div>
 </div>
</div>
<div>
    <?php include 'footer2.php' ?>

</div>
</body>
</html>