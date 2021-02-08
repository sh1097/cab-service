<?php
session_start();

$num= $_GET['mobile'];

$otp=rand(11111,99999);
 $_SESSION['otp']=$otp;


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk?authorization=o9bSgmlODfv8FpQuid4XcCTrx7VBtLGkzP5hNIH0R13wyAEnZaSv12IAzPCYUQnj9FZXBhREDtLa6Oqr&sender_id=FSTSMS&message=".urlencode('your otp is'.$otp)."&language=english&route=p&numbers=".urlencode($num),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "not correct";
} else {
  echo "correct";
}



?>