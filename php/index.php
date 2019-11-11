<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
//require 'vendor/autoload.php';


$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello World from our new slim image \n");
    return $response;
});

// $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
//     $name = $args['name'];
//     $response->getBody()->write("Hello, $name");
//     return $response;
// });

$app->run();
