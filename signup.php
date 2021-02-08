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
           
                <h1 class="mb-0 bg-yellow "  ><strong>Signup</strong></h1>
                <div class="row mt-3" style="border:1px solid black;width:50%;margin-left:25%;opacity:.9;">
              <div class="card-body">
                <form autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
                  <div class="form-group">
                    <label for="uname1">name</label> 
				<input class="form-control" id="name" name="name" required="required" type="text">
                  </div>   
                  <div class="form-group">
                  <span id="view"></span><br>
		
        <div class="First_box">
                
        
                    <label>Email</label><br>
                    <input  class="form-control" id="email" type="text" placeholder="Enter Email" name="email"> <br>
        
                    <button type="button" class="btn btn-success"  onclick="sendEmail()" value="Send An Email">verify email</button>
        </div> 

        <div class="Second_box" style="padding-top:10%;">
               <input type="text" name="otp1" id="writeotp" placeholder="enter your otp" />
                <input class="btn btn-success"  type="submit" name="goo" value="submit otp"   id="otp1" />
        </div>
         </div>  
     <div class="form-group" class="first_box">
                            <label for="uname1">Mobile Number</label> 
                <input class="form-control" id="mobile" name="mobile" required="" type="number">
                <br>
                  
                  
                  <input class="btn btn-success" type="submit" name="submit" value="verify mob.No"  id="submit" onchange="dis()" />
    </div>  
     <div class="second_box" >
     <label > enter otp</label>
                            <input type="text" name="otp" id="writtenotp" placeholder="enter your otp" />
                    <span id="show"></span>
                        <input  class="btn btn-success "  type="submit" name="go" value="submit otp"  id="otp" />
    </div>

                  <div class="form-group">
                    <label>Password</label> 
				<input autocomplete="new-password" name="password" class="form-control" id="pwd1" required="" type="password">
                  </div>
             
				<button class="btn btn-success btn-lg " type="button" id="signin"  name="signin" style="background-color:black;border:none;color:white;border-radius:4px;">signIn</button>
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>
</center>


<div>
    <?php include 'footer2.php'?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>

    // mobile validation
    
$(document).ready(function(){
    $("#submit").click(function(e){
        e.preventDefault();
        var mobile=document.getElementById("mobile").value;
        if(mobile=="" && mobile.length!=10 ){
            alert("enter valid number");

        }
        else{
        $.ajax({
            url:'verified.php',
            type:'GET',
            data:{mobile:mobile},
            success:function(result){
                if(result=="correct"){
                    $(".first_box").hide();
                    $(".second_box").show();
                }
            }
        });
        }
    })
})

$(document).ready(function(){
    $("#otp").click(function(e){
        e.preventDefault();
        var otp=document.getElementById("writtenotp").value;
        $.ajax({
            url:'valid.php',
            type:'GET',
            data:{otp:otp},
            success:function(result){
                console.log(result);
                if (result=="yes"){
               
                 $("#how").html("otp verified");
                 $("#show").css('color','green');
                 $("#otp").hide();
                    $("#submit").hide();
                
                }  
                else{
                    $("#show").html("invalid verified"); 
                    $("#show").css('color','red');  
                  
                }
        }
        });

})
})



</script>
<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <script type="text/javascript">
    //email validation
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            if (isNotEmpty(name) && isNotEmpty(email) ) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                   }, success: function (result) {
                    
          
                      $(".First_box").show();
                      $(".Second_box").show();
                      $("view").text("otp sent");
                      $("view").css('color','green');
               
                   }
                 
                });
            }
        }
       
        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }

    
        $(document).ready(function(){
    $("#otp1").click(function(e){
        e.preventDefault();
        var otp=document.getElementById("writeotp").value;
        $.ajax({
            url:'valid.php',
            type:'GET',
            data:{otp:otp},
            success:function(result){
                console.log(result);
                if (result=="yes"){
            
                    $(".Second_box").hide()
                 $("#view").html("otp verified");
                 $("#view").css('color','green');
                
                }  
                else{
                    $("#view").html("invalid verified"); 
                    $("#view").css('color','red');  
                }
        }
        });

})
        })
    
         $(document).ready(function(){
    $("#signin").click(function(e){
        e.preventDefault();
        var name=document.getElementById("name").value;
        console.log(name);
        var email=document.getElementById("email").value;
        console.log(email);
        var mobile=document.getElementById("mobile").value;
        console.log(mobile);
        var password=document.getElementById("pwd1").value;
        console.log(password);
        $.ajax({
            url:'dbase.php',
            type:'POST',
            data:{name:name,
            email:email,
            mobile:mobile,
            password:password},
            success:function(result){
                alert(result);
                
            }
        });
    })
         })
        </script>

</body>

</html>
       