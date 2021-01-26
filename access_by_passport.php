<?php

require 'vendor/autoload.php';

$client = new GuzzleHttp\Client;

$accessToken = getenv('ACCESS_TOKEN');

$response = $client->request('GET', 'http://127.0.0.1/api/user', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer '.$accessToken,
    ],
]);

var_dump(json_decode((string) $response->getBody(), true));
