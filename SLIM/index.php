<?php

require '/vendor/autoload.php';

$app = new \Slim\App;

$app->GET('/get', function ($request,$response) {

    $response->getBody()->write("HOLA GET");

    return $response;
});

$app->POST('/post', function ($request,$response) {

    $response->getBody()->write("HOLA POST");

    return $response;
});


$app->run();

