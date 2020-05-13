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
$sg = new \SendGrid($apiKey);

try {
    $response = $sg->client->_("suppression/bounces")->get();
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '.  $e->getMessage(). "\n";
}