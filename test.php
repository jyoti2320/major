<?php
require 'PHPMailerAutoload.php';
$email= "goswamiprashant199999@gmail.com";
$mail = new PHPMailer();

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Port=465;
$mail->Username = 'emailtestkrnahai@gmail.com';                            // SMTP username
$mail->Password = 'emailtest@123';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'emailtestkrnahai@gmail';
$mail->FromName = 'test';
$mail->addAddress("$email");  // Name is optional


$mail->WordWrap = 50;  
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Here is the subject";
$mail->Body    = "Hi";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: '' ". $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>


