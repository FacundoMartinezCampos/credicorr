<?php


// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("./sendgrid-php.php");
// If not using Composer, uncomment the above line


    $name = $_POST['nombre'];
    $lname = $_POST['apellido'];
    $mail = $_POST['email'];
    $cell = $_POST['celular'];
    $prov = $_POST['provincia'];
    $ciu = $_POST['ciudad'];
    $dn = $_POST['dni'];
    $cuill = $_POST['cuil'];
    $work = $_POST['trabajo'];
    $money = $_POST['monto'];
    $months = $_POST['cuotas'];
    $message = $_POST['mensaje'];


$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("solo-formularios@credicorr.com.ar", "Credicorr System");
$email->setSubject("Nuevo Formulario");
$email->addTo("credicorrprestamos@hotmail.com", "Example User");
$email->addContent("text/plain", "Nombre: $name"."\n"."Apellido: $lname"."\n"."Email: $mail"."\n"."Celular: $cell"."\n"."Provincia: $prov"."\n"."Ciudad: $ciu"."\n"."DNI: $dn"."\n"."Cuil/Cuit: $cuill"."\n"."Trabajo: $work"."\n"."Monto deseado: $money"."\n"."Cuotas deseadas: $months"."\n"."Mensaje: $message");



$sendgrid = new \SendGrid('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');

try {
    $response = $sendgrid->send($email);
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

header("Location: prestamo.php")



?>