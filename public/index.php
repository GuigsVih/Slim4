<?php

session_start();

use Slim\Factory\AppFactory;
use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include __DIR__ . '/../vendor/autoload.php';

$container = new Container();

AppFactory::setContainer($container);
$app = AppFactory::create();

include __DIR__ . '/../config/dependencias.php';

include __DIR__ . '/../config/rotas.php';

$app->run();
