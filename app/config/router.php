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

$router->handle($_SERVER['REQUEST_URI']);
