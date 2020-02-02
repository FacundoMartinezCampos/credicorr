<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'asd';
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("./sendgrid-php.php");
// If not using Composer, uncomment the above line
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("testing446688@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("testing446688@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
echo 'sendgrid api key ->' . getenv('SENDGRID_API_KEY');
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    echo 'This is also executing';
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
