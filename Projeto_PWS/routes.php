<?php
require_once 'controllers/BoController.php';
//require_once 'controllers/AuthController.php';

return [
    'defaultRoute' => ['GET', 'BoController', 'index'],
    'bo' => [
        'index' => ['GET', 'BoController', 'index'],
        'login' => ['GET', 'BoController', 'login'],
        'erro' => ['GET', 'BoController', 'erro'],
    ],
];