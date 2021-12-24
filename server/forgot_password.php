<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if(isset($_GET['forgotpassword'])){
    $forgetRequestEmail = $_POST['forgot_email'];
    
    if($forgetRequestEmail){        
        
        $mail = new PHPMailer();
        
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->Host = 'smtp.gmail.com';

        $mail->Port = 587;

        $mail->SMTPSecure = 'tls';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        $mail->SMTPAuth = true;

        $mail->Username = 'sameershoukat000@gmail.com';
        
        $mail->Password = 'Pointers@789';

        $mail->setFrom('sameershoukat000@gmail.com', 'Sameer');

        // $mail->addReplyTo('replyto@example.com', 'First Last');

        $mail->addAddress('sameershoukat000@gmail.com');

        $mail->Subject = 'PHPMailer GMail SMTP test';
        
        $mail->Body = 'this is new mail here';
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }
            }
        
        
}
