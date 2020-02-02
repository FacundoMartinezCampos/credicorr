<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("./sendgrid-php.php");
// If not using Composer, uncomment the above line
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("solo-formularios@credicorr.com.ar", "Credicorr System");
$email->setSubject("Formulario Credicorr");
$email->addTo("testing446688@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid('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');
try {
    echo 'This is also executing';
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

?>