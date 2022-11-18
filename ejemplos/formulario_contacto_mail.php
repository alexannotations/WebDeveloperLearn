<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuración inicial de nuestro servidor de correos
    // servidor de correo fake
    // https://github.com/platzi/php-html/tree/23-implementacion-servidor-gmail
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com'; //'smtp.mailtrap.io'
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465; //2525
    $phpmailer->Username = '4ca1ce943d0ba1@gmail.com';
    $phpmailer->Password = 'dcb5849e9c1c37';

    //  Añadiendo destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'Mi Empresa');
    $phpmailer->addAddress($email, $name); 

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar el correo
    $phpmailer->send();
    
}

?>