
 

<?php include 'header.php';

$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";
  $w=$_SESSION['user_id'];
  if(isset($_POST['update'])){ 
    $location=$_POST['location'];
      

$distance=$_POST['distance'];
   //    $getnumber=$_POST['mobile'];

}
$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);

$sql1 = ("SELECT * FROM `tbl_location` WHERE  name='$location' ");
$result = mysqli_query($con, $sql1);
if (mysqli_num_rows($result) > 0) {
    echo "record already exists";
} else {
    if($location!=" " && $distance!=" ")
{    $sql1 = "INSERT INTO `tbl_location` ( `name`, `distance`, `is_available`) VALUES ('$location', '$distance', '1')";

    $result = $con->query($sql1);
    //   $_SESSION['ques_id'] = $result['ques_id'];
      echo "<script> alert('data inserted successfully');</script>";

 
  

   header('location:admindashboard.php');

}
}

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
    .form-control {
    display: block;
    width: 50%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.second_box{
    display:none;
}
.Second_box{
    display:none;
}



    </style>
    </head>
    <body>

<center>
						
            <div class="card card-outline-secondary" style="padding:5%;border:none;">
         <div class="row mt-3" style="border:1px solid black;width:50%;margin-left:25%;opacity:.9;">
              <div class="card-body">
                <form autocomplete="off" class="form" id="formLogin" name="formLogin" role="form" action=" " method="post">
                  <div class="form-group">
                 
                  <div class="form-group">
                  <span id="view"></span><br>
		
        <div>
              <label>Add location</label><br>
                <input  class="form-control" id="location" type="text" value="" name="location"> <br>
        
                    
        </div> 

      
         </div>  
     <div class="form-group" >
                            <label for="uname1">Add Distance</label> 
                <input class="form-control" type="text" id="distance" name="distance" value="" required="" type="number">
            <br>
    </div>  
     <div>
    </div>
  
             
				<button class="btn btn-success btn-lg " type="submit" id="update"  name="update" style="background-color:black;border:none;color:white;border-radius:4px;">update</button>
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>