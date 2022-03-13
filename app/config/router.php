<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
    '/invoices/list',
    [
        'controller' => 'Signup',
        'action'     => 'test',
    ]
);

$router->add(
    '/sasstutorial',
    [
        'controller' => 'Signup',
        'action'     => 'sasstutorial',
    ]
);

$router->add(
    '/tailwindtutorial',
    [
        'controller' => 'Signup',
        'action'     => 'tailwindtutorial',
    ]
);

$router->handle($_SERVER['REQUEST_URI']);


