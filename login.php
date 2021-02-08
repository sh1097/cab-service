<?php include 'header2.php';?>
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
    width: 40%;
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
    </style>
    </head>
    <body>

<center>
						
            <div class="card card-outline-secondary" style="padding:5%;border:none;">
                
                <h3 class="mb-0 bg-yellow " id="present" >Login</h3>
                <div class="row mt-3" style="border:1px solid black;width:50%;margin-left:25%;background:#f8d934">
              <div class="card-body">
                <form autocomplete="off" class="form" id="formLogin" name="formLogin" role="form"  method="POST" action="./admin/add.php">
                  <div class="form-group">
                    <label for="uname1">Username</label> 
										<input class="form-control" id="email" name="email" required="required" type="text">
                  </div>
                  <div class="form-group">
                    <label>Password</label> 
										<input autocomplete="new-password" class="form-control"  name="password" id="password" required="" type="password">
                  </div>
             
				<button class="btn btn-success btn-lg " id="login" name="login" type="submit" style="background-color:black;border:none;color:white;border-radius:4px;">Login</button>
                </form>
              </div>
              </div><!--/card-block-->
            </div><!-- /form card login -->
          </div>
        </div>
</center>


<div>
    <?php include 'footer2.php'?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</body>
</html>
       