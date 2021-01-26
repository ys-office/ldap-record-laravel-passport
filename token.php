<?php

require 'vendor/autoload.php';

$http = new GuzzleHttp\Client;

$response = $http->post('http://127.0.0.1/oauth/token', [
    'form_params' => [
        'grant_type' => 'password',
        'client_id' => getenv('CLIENT_ID'),
        'client_secret' => getenv('CLIENT_SECRET'),
        'username' => getenv('USER_NAME'),
        'password' => getenv('USER_PASSWORD'),
        'scope' => '',
    ],
]);

var_dump(json_decode((string) $response->getBody(), true));
