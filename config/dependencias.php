<?php

$container = $app->getContainer();

$container->set('view', function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../src/Template', [
        'cache' => false
    ]);

    return $view;
});

$container->set('App\Controller\HomeController', function ($container) {
    $view = $container->get('view');
    return new App\Controller\HomeController($view);
});
