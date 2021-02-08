<!DOCTYPE html>
<html>
<head>
    <title>Send an Email</title>
    <style>
        .second_box{
            display:none;
        }
        </style>
</head>
<body>

	<center>
		<h4 class="sent-notification"></h4>

		<form id="myForm">
        <span id="show"></span><br>
		
<div class="first_box">
		

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
    <br>

            <button type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
</div> 
            <div class="second_box" style="padding-top:10%;">
                    <label>verify</label><br>
    
    <input type="text" name="otp" id="writtenotp" placeholder="enter your otp" /><br>
 
  
    <input type="submit" name="go" value="submit otp"   id="otp" />
</div>
		</form>
	</center>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
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
                   }, success: function (response) {
                    
                      $(".first_box").hide();
                      $(".second_box").show();
                      $("show").text("otp sent");
                      $("show").css('color','green');
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
            
                    $(".second_box").hide()
                 $("#show").html("otp verified");
                 $("#show").css('color','green');
                
                }  
                else{
                    $("#show").html("invalid verified"); 
                    $("#show").css('color','red');  
                }
        }
        });

})
        })
// })function getotp(){
//          var otp=$("writtenotp");
       
//             $.ajax({
//             url:'get.php',
//             type:'GET',
//             data:{otp:otp},
//             success:function(result){
//                 console.log(result);
//                 if (result=="yes"){
//         console.log("otp verify")
                
//                 }  
                
//         }
//         });   

//     //  }    
    </script>

</body>
</html>