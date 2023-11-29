<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'nguyenngoctoan462@gmail.com';
    $mail->Password   = 'jxkmscyeaqtdvmsz';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $fromName = $_POST['name'];
    $fromEmail = $_POST['email'];
    $mail->setFrom($fromEmail, $fromName);
    $mail->addCC('nguyenngoctoan462@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New message from ' . $fromName;
    $mail->Body = 'Name: ' . $fromName . '<br>Email: ' . $fromEmail . '<br>Message: ' . $_POST['message'];

    $mail->send();
    echo '
    <div class="aaaaa " style=" 
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    
    ">
        <img src="../assets/images/others/sendsucess.jpg" alt="Send Success" style="width:800px ;height:400px"; margin:0 auto; />
        <!-- HTML !-->
        <a href="index.php?act=index.php?act=home" class="button-89" role="button">Back to shop</a>


    <style type="text/css"> 
    /* CSS */
    .button-89 {
      --b: 3px;   /* border thickness */
      --s: .45em; /* size of the corner */
      --color: #373B44;
      
      padding: calc(.5em + var(--s)) calc(.9em + var(--s));
      color: var(--color);
      --_p: var(--s);
      background:
        conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
        var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
      transition: .3s linear, color 0s, background-color 0s;
      outline: var(--b) solid #0000;
      outline-offset: .6em;
      font-size: 16px;
    
      border: 0;
    
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }
    
    .button-89:hover,
    .button-89:focus-visible{
      --_p: 0px;
      outline-color: var(--color);
      outline-offset: .05em;
    }
    
    .button-89:active {
      background: var(--color);
      color: #fff;
    }
    </style>
    </div>
    ';
} catch (Exception $e) {

    echo __DIR__;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
