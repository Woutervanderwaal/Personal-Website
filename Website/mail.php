<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'PHPMailerAutoload.php';

$mail = new PHPMailer();
//$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host = "localhost"; // SMTP server
//IsSMTP(); // send via SMTP
$mail->SMTPDebug = true;
$mail->IsSMTP();
$mail->Host     = "smtp.gmail.com"; // SMTP server Gmail
$mail->Mailer   = "gmail";
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = 'tls'; 
$mail->Port = 587;   


$mail->Username = "wouter.v.d.waal@gmail.com"; // 
$mail->Password = "*****"; // SMTP password
$webmaster_email = "henrikus.antony@gmail.com"; //Reply to this email ID
$email = "wouter.v.d.waal@gmail.com"; // Recipients email ID
$name = "Hendrikus Anthony"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "Anthony";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Anthony");
$mail->WordWrap = 50; // set word wrap

$mail->IsHTML(true); // send as HTML
$mail->Subject = "Ini adalah Email HTML";
$mail->Body = "Ini adalah email contoh"; //HTML Body
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body 
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}
?>
