<?php 
 session_start();
 $servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";
$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);
$sql = "SELECT *  FROM tbl_location  ";
 
$result = mysqli_query($con,$sql);
$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedcab";
$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);
$sql = "SELECT *  FROM tbl_location  ";
 
$result1 = mysqli_query($con,$sql);




?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<style>
                  .banner{
                      background-image:url('cabg.jpg');
                      background-size:cover;
                      background-repeat:no-repeat;
                      width:100%;
                      height:90%;
                      background-position:center;
                  }


                      .in{
                          color:black;
                          font-size:13px;
                          border:#9ACD32;
                          margin-left:10%;
                          
                      }
                      img{
                          width:30%;
                          height:40%;
                          background:#9ACD32;
                      margin-left:29%;
                        border-radius:150px 150px 150px 150px;
                      }
                  
                      .submit{
                        width:80%;
                        border:1px #DCDCDC;
                        color:white;
                        margin-left:10%;
                        margin-bottom:4%;
                      }
                        #mymodal{
                          white-space: pre-line ;
                        }
                        #out{
                          color:red;
                          font-family: Georgia, serif;
                        }
                      #id1{
                        background-color:black;
                        color:#9ACD32;
                        width:100%;
                      }
                      .form1 {
                          display: block;
                          width: 80%;
                          height: calc(1.5em + .75rem + 2px);
                          padding: .375rem .75rem;
                          font-size: 1rem;
                          font-weight: 400;
                          line-height: 1.5;
                          color: #495057;
                          background-color: #f8f9fa;
                          background-clip: padding-box;
                          border: 1px solid #ced4da;
                          border-radius: .25rem;
                          transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                          margin-left:10%;
                           }
                           select {
                                    -webkit-appearance: none;
                                    -moz-appearance: none;
                                    text-indent: 1px;
                                    text-overflow: '';
                                }
                                input::-webkit-outer-spin-button,
                                input::-webkit-inner-spin-button {
                                  -webkit-appearance: none;
                                  margin: 0;
                                }
                                input[type=number] {
                                  -moz-appearance: textfield;
                                }
</style>
</head>
<body>
<div>
              <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background:black;">
                  <a class="navbar-brand" href="index.php" style="color: #f8d934;font-size: 55px;">C<span style="color:white;">ed</span>C<span style="color:white;">ab</span>
                  <i class="fa fa-map-marker" aria-hidden="true" style="font-size:50px;"></i></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span> </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                              <a class="nav-link" href="login.php" style="color:#f8d934"><b>Login</b><span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            
                              <a class="nav-link" href="#" style="color:white"><b>About Us</b></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="signup.php" style="color:#f8d934"><b>Sign Up</b></a>
                          </li>
                          <!-- <li class="nav-item">
                              <a class="nav-link" href="#" style="color:white"><b>Contact Us</b></a> -->
                          <!-- </li> -->
                          <li class="nav-item">
                              <button class="btn btn-warning"  style="background:	#f8d934;" type="submit">Contact Us</button>
                          </li>
                      </ul> 
                  </div>
              </nav>
      </div>
<section class="banner">   
           <h1  style="color:white;text-align:center; font-size:50px; "><b>Book A City Taxi for your destination</b></h1>
            <p  style="color:black;text-align:center; color:white;font-size:30px;"><b>choose from a range of categories and price</b></p>     
            <div style="padding-top:10%; "class="col-md-4 height=60%;width:50%;" >
                <form  style="background:#21252996;border-radius:30px;" >
                        <div class="form-group">
                                  <label for="Inputselect" class="in" style="color:white;">pickup point</label>
                                  <select class="form1"name="pick" id="pick"  >
                                  <option >current location</option>
                                   <?php $s="select * from tbl_new_user where type='client'";
                             while($rw=mysqli_fetch_array($result))
                                    { ?>
                                    <option value="<?php echo $rw['name']; ?>"<?php if($rw['name']==$rw['name'])  ?>><?php echo $rw['name']; ?></option>
                                    <?php } ?> 
                          
                                  </select>
                          </div> 
                        <div class="form-group">
                              <label for="Inputselect" class="in" style="color:white;">Destination point</label>
                              <select class="form1"name="dest" id="dest"  >
                              <option value="" disabled selected >drop location</option>
                              <?php 
                             while($rw=mysqli_fetch_array($result1))
                                    { ?>
                                    <option value="<?php echo $rw['name']; ?>"<?php if($rw['name']==$rw['name'])  ?>><?php echo $rw['name']; ?></option>
                                    <?php } ?> 
                              </select>
                        </div> 
                        <div class="form-group">
                            <label for="Inputselect" class ="in" style="color:white;">Cab Type</label>
                            <select class="form1" name="cabtype" id="cabtype" onchange="dis()">
                            <option value="" disabled selected>choose your cab</option>
                            <option> CedMicro</option>
                            <option> CedMini</option>
                            <option>CedRoyal</option>
                            <option>CedSUV</option>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="Inputselect"  id="sh" class="in" style="color:white;">Enter Weight  in Kg</label>
 
                            <input type="number" name="num" class="form1"  min="0" id="num" placeholder="enter the weight in kg"  oninput="validity.valid||(value='');"/>
                        </div>
                 
                    <button type="button" class="btn btn-warning submit"  name="submit" style="background:	#f3d21d;" data-toggle="modal" data-target="#myModal">
               calculate Fare </button>
              
                      <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-success" data-dismiss="modal">Book Now </button> -->
                            </div>
                          </div>
                        </div>
                      </div></form> 
            </div>
             </div>
        </div>
        <div style="margin-top:10%;"> <?php include 'footer2.php' ?></div>
        <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                   <div class="modal-header">
                      <h4 class="modal-title">Book ride</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                   
                     <div class="modal-body" id="out"></div>
                   
                   <div class="modal-footer">

 <script>
 function dis() {
           if(document.getElementById("cabtype").value=="CedMicro"){
             document.getElementById("num").disabled=true;
            document.getElementById("num").placeholder="No luggage can be carried in CedMicro";
            document.getElementById("num").style.display='none';
            document.getElementById("num").style.value='';
            document.getElementById("num").placeholder="";
            document.getElementById("sh").style.display="none";
           }
           else{
             document.getElementById("num").disabled=false;
            document.getElementById("num").placeholder="Enter the weight in kg";
            document.getElementById("num").style.display='';}
          }
      $('select[name=dest]').on('change', function() {
        var self = this;
        $('select[name=pick]').find('option').prop('disabled', function() {
            return this.value == self.value
        });
      });

      $('select[name=pick]').on('change', function() {
        var self = this;
        $('select[name=dest]').find('option').prop('disabled', function() {
            return this.value == self.value
        });
      });
            
       
$(document).ready(function(){
  $(".submit").click(function(){
     var pick=$("#pick").val();
     var dest=$("#dest").val();
     var cab=$("#cabtype").val();
     var weight=$("#num").val();
        if( pick=='current location' ){
          $("#out").text("enter  current location");
         }
       else if(dest==''){
               $("#out").text("enter  drop location");
        }  
        else{
       $.ajax({url: "cedcab.php", 
          method:"POST",
          data:{pick:pick,dest:dest,cab:cab,weight:weight},
         success: function(data){
            $("#out").html(data);}
   });
  }
 });
});
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
  
</html>