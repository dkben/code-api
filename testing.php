<?php

require __DIR__.'/vendor/autoload.php';

use Guzzle\Http\Client;

// create our http client (Guzzle)
$client = new Client('http://127.0.0.1:8401', array(
    'request.options' => array(
        'exceptions' => false,
    )
));

$request = $client->post('/api/programmers');
$response = $request->send();

echo $response;
echo "\n\n";
