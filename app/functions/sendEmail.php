<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require 'keys.php';


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $emailSend;
    $mail->Password   = $passwordSend;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';


    $mail->setFrom($emailSend, 'Casa da Limpeza Ubatuba');
    $mail->addAddress('luangaldinodev@gmail.com', 'teste');
    // $mail->addEmbeddedImage('../../src/img/Logo-HDF.jpeg', 'logo_cid');
    // $emailTemplate = file_get_contents('../../src/html/email_template.html');
    // $emailTemplate = str_replace(
        // ['[Nome]'],
        // [$first_name],
        // $emailTemplate
    // );

    $mail->isHTML(true);
    $mail->Subject = 'teste de email';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    // return "enviado com sucesso";
    echo 'Message has been sent';
} catch (Exception $e) {
    // return "Erro ao enviar o email. {$mail->ErrorInfo} " . $e;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


