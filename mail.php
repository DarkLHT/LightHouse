<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'mail.lighthouse.ma';
$mail->SMTPAuth = true;
$mail->Username = 'mail.smtp@lighthouse.ma';
$mail->Password = 'B4psquq47*lyHoBg';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

 $name = strip_tags(trim($_POST["name"]));
 $subject = strip_tags(trim($_POST["subject"]));
 $number = strip_tags(trim($_POST["number"]));
 $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
 $message = trim($_POST["message"]);


$mail->setFrom($email);
//$mail->addReplyTo('contact@lighthouse.ma', 'CodexWorld');

// Add a recipient
$mail->addAddress('sofian.beddi@lighthouse.ma');

// Add cc or bcc 

// Email subject
$mail->Subject = $subject;

// Set email format to HTML
$mail->isHTML(true);

//$mail->SMTPDebug = 3;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

// Email body content
$mailContent = $message;
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
header( "refresh:1; url=index.php" );

}else{
    echo 'Message has been sent';
header( "refresh:1; url=index.php" );
}











?>