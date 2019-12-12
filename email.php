<?php
$from = "abdelhak.ouarari1@gmail.com";
$to = "abdelhak.ouarari@gmail.com";
$subject = "SUJET";
$body = "VOTRE_MESSAGE";

$username = "mail.smtp@lighthouse.ma";
$password = "17?gjY1fyMyvDhtl";

require_once "mail/Mail/Mail.php";
$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => 'localhost',
'auth' => true,
'username' => $username,
'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message envoyé avec succès!</p>");
}

?>