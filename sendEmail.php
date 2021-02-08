<?php
session_start();
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
       $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = "otp verification";
        $otp=rand(1111,9999);
$_SESSION['otp']=$otp;
      

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
    

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "shitalgupta1097@gmail.com"; //enter you email address
        $mail->Password = 'shital1097##'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("shitalgupta1097@gmail.com"); //enter you email address
        $mail->Subject = ("$email ($subject)");
        $mail->Body = "your otp is".$otp;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent";
       
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
           
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }


    
?>
