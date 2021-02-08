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



    </style>
  </head>



<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <a class="navbar-brand"  style="color:white;" href="index.php">cedcab</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admindashboard.php" style="color:white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color:white;">Book A Ride <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" style="color:white;"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Pendind Users  Requests</a>
          <a class="dropdown-item" href="#">Pending Approval Requests</a>
     <a class="dropdown-item" href="#"> All Users</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  style="color:white;"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Locations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Locations List</a>
          <a class="dropdown-item" href="#">All Locations</a>
   
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  style="color:white;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Change Password </a>
          <a class="dropdown-item" href="#">Edit profile</a>
       
      </li>
    </ul>
    <form class="form-inline ">
     <h6 style="color:white;"  ><?php if(isset($_SESSION['userlogin'])){echo $_SESSION['userlogin'];}?></h6>
     <button class="btn btn-outline-info"  type="submit"><a href="logout.php" style="text-decoration: none;">Logout</a></button>    </form>
  </div>
</nav>
<h1>Pending Rides</h1>
<div style="padding-top:5%;">

<?php  include('user crud.php');
 
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $update = true;
            $record = mysqli_query($con, "SELECT * FROM tbl_user WHERE users_id=$id");
        
           
                $n = mysqli_fetch_array($record);
                $email_id= $n['email'];
                $name = $n['name'];
               $mobile= $n['mobile'];
               $password = $n['password'];
         
                $id=$n['user_id'];
            
        }?>
      
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
$('#dataTable').DataTable({
});
});
</script>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($con, "SELECT * FROM tbl_ride WHERE status=1 "); ?>

<table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%"> 
<thead>
            <tr>
                <th>from_loc</th>
                <th>To_loc</th>
                <th>Cab_type</th>
                <th>Ride_date(YYYY-MM-DD)</th>
                <th>Total_distance(km)</th>
                <th>Luggage(KG)</th>
                <th>Total_fare</th>
                <th>Action</th>
            
		
                
            </tr>
        </thead>
	  
		<tbody>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
			<td><?php echo $row['From_loc']; ?></td>
            <td><?php echo $row['To_loc']; ?></td>
            <td><?php echo $row['CAB_type'];?></td>
            <td><?php echo $row['Ride_date']; ?></td>
            <td><?php echo $row['Total_distance']; ?></td>
            <td><?php echo $row['Luggage']; ?></td>
            <td><?php echo $row['Total_fare']; ?></td>
            <td>
            <a style="margin-left:6%;"  href="approved.php?accept=<?php echo $row['Ride_id']; ?>" class="btn btn-outline-success Saccept_btn">accept</a> 
			
			
            <a style="margin-left:6%;"  href="approved.php?del=<?php echo $row['Ride_id']; ?>" class="btn btn-outline-danger Sdel_btn">Cancel</a> 
       </td>
       
		
		
		</tr>
    <?php } ?>
 </div>  
</table>
		
	</tbody>
   
    </table>
        </div>
    <div >
    <?php include 'footer2.php' ?>
    </div>
    <style> th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: yellowgreen;
    color: white;
}</style>
        </body>
        </html>
