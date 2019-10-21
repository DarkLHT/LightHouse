<?php
$formData = $_POST;
sendMailAsAttachment( $formData );


function prepareEmail( $formData ) {
    
    // email fields: to, from, subject, and so on
    $to = "hamidhamza18@gmail.com";
    $from = $formData['email']; 
    $subject = $formData['subject']; 
    $message = "Hamza";    // boundary 
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
 
    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
       
    $emailData = array (
        'to' => $to,
        'from' => $from,
        'subject' => $subject,
        'headers' => $headers,
        'message' => $message
    );
    
    return $emailData;
    
}

function sendMailAsAttachment( $formData ) {
    
    $emailData = prepareEmail( $formData );
    $message = $emailData['message'];
    $ok = @mail($emailData['to'], $emailData['subject'], $message, $emailData['headers']); 
    if ($ok) { 
            echo "<script type='text/javascript'>alert('Message Envoyer avec Succés Merci!')</script>";
            header( "refresh:1; url=index.html" );

    } else { 
            echo "<script type='text/javascript'>alert('Message Non Envoyer Veuillez Réessayer Merci!)</script>";
            header( "refresh:1; url=contact.php" );
    } 
}

?> 