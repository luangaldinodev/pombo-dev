<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require 'keys.php';

$nome = 'Luan Galdino';
$bodyMensage = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus natus aspernatur sequi deserunt recusandae voluptatem eum ad ab eveniet ipsam, aliquam blanditiis reiciendis tempora aut commodi delectus quae nam dicta temporibus quisquam amet beatae animi. Repellendus officia vel pariatur laboriosam necessitatibus, doloremque nam dolorem cupiditate, vero aliquid tenetur optio magni fugit omnis veniam cum placeat qui non quos deleniti dignissimos odit! Modi officia quae minima veritatis facilis architecto illo sit exercitationem quisquam blanditiis quod iusto beatae deleniti error dolore eligendi eos, distinctio dolor explicabo consequatur nihil! Pariatur, cum quibusdam eius porro omnis labore voluptatibus facere neque. Magni corrupti officiis qui!';

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
    $emailTemplate = file_get_contents('templates_email/template_01.html');
    $emailTemplate = str_replace(
        ['[nome]', '[mensagem]'],
        [$nome, $bodyMensage],
        $emailTemplate
    );

    $mail->isHTML(true);
    $mail->Subject = 'teste de email';
    $mail->Body    = $emailTemplate;

    $mail->send();
    // return "enviado com sucesso";
    echo 'Message has been sent';
} catch (Exception $e) {
    // return "Erro ao enviar o email. {$mail->ErrorInfo} " . $e;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


