<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
	$location = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	header('Location: '.$location);
}

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require 'vendor/autoload.php';
require 'constant.php';

$apy_key=SECRET_KEY;
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("sendgrid@frankmorenoalburqueque.com", "Send Grid");
$email->setSubject("Esta es una prueba");
$email->addTo("admin@frankmorenoalburqueque.com", "Frnak Moreno");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid($apy_key);
try {
    $response = $sendgrid->send($email);
    //print $response->statusCode() . "\n";
    //print_r($response->headers());
    //print $response->body() . "\n";
    echo json_encode($response->statusCode());
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

?>