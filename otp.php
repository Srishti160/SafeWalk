<?php

// ========To send data at database====================================================================
// require("signup2.php");

// $email = $_POST['email'];
// $otp = $_POST['otp'];

// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname ="safewalk_db";

// $con = mysqli_connect($server, $username, $password, $dbname);

// $govtype = $_POST["govtype"];
// $govno = $_POST["govno"];
// $pic = $_POST["pic"];
// $cname = $_POST["cname"];
// $cnum = $_POST["cnum"];
// $relation = $_POST["relation"];
// echo "$govtype. $govno. $pic. $cname. $cnum. $relation";
// $query = "";
// mysqli_query($con, $query);

// ========To Send The OTP at email====================================================================

$subject = "One Time Password";
$message = "Your OTP for SafeWalk Signup is $otp";
include("smtp/PHPMailerAutoload.php");
echo smtp_mailer($email, $subject, $message);

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "surbhiagrawal1112@gmail.com";
    $mail->Password = "ouqpdwyhimridtds";
    $mail->SetFrom("surbhiagrawal1112@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify peer name' => false, 'allow self signed' => false));
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    } else {
        header("location:signup4.php");
    }
}

?>