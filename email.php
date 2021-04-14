
<?php
require 'PHPMailerAutoload.php';
$email= "ahirwarshivani11@gmail.com ";          // isko bharo
$mail = new PHPMailer();

$mail->isSMTP();                     
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                               
$mail->Port=465;
$mail->Username = 'ahirwarjyoti10@gmail.com ';         // isko bharo                   
$mail->Password = 'dearzindagi@4';            // isko bharo             
$mail->SMTPSecure = 'ssl';                           

$mail->From = ' ahirwarjyoti10@gmail.com';             // isko bharo
$mail->FromName = 'jyoti ahirwar ';                  // isko bharo
$mail->addAddress("$email");                                             // Name is optional


$mail->WordWrap = 50;  
$mail->isHTML(true);                                  
$mail->Subject = "Here is the subject";
$mail->Body    = "hyy";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: '' ". $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";

header("location:jyoti1.php?c=1");
?>


