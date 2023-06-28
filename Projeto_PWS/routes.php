<?php
require_once 'controllers/BoController.php';
require_once 'controllers/FoController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/IvaController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/FolhaObraController.php';
require_once 'controllers/LinhaObraController.php';

return [
    'defaultRoute' => ['GET', 'BoController', 'index'],
    'bo' => [
        'index' => ['GET', 'BoController', 'index'],
    ],
    'fo' => [
        'index' => ['GET', 'FoController', 'index'],
    ],
    'login' => [
        'index' => ['GET', 'LoginController', 'index'],
        'checklogin' => ['POST', 'LoginController', 'checklogin'],
        'logout' => ['GET', 'LoginController', 'logout'],
    ],
    'user' => [
        'index' => ['GET', 'UserController', 'index'],
        'show' => ['GET', 'UserController', 'show'],
        'create' => ['GET', 'UserController', 'create'],
        'store' => ['POST', 'UserController', 'store'],
        'edit' => ['GET', 'UserController', 'edit'],
        'update' => ['POST', 'UserController', 'update'],
        'delete' => ['GET', 'UserController', 'delete'],
    ],
    'empresa' => [
        'index' => ['GET', 'EmpresaController', 'index'],
        'show' => ['GET', 'EmpresaController', 'show'],
        'create' => ['GET', 'EmpresaController', 'create'],
        'store' => ['POST', 'EmpresaController', 'store'],
        'edit' => ['GET', 'EmpresaController', 'edit'],
        'update' => ['POST', 'EmpresaController', 'update'],
        'delete' => ['GET', 'EmpresaController', 'delete'],
    ],
    'iva' => [
        'index' => ['GET', 'IvaController', 'index'],
        'show' => ['GET', 'IvaController', 'show'],
        'create' => ['GET', 'IvaController', 'create'],
        'store' => ['POST', 'IvaController', 'store'],
        'edit' => ['GET', 'IvaController', 'edit'],
        'update' => ['POST', 'IvaController', 'update'],
        'delete' => ['GET', 'IvaController', 'delete'],
    ],
    'servico' => [
        'index' => ['GET', 'ServicoController', 'index'],
        'show' => ['GET', 'ServicoController', 'show'],
        'create' => ['GET', 'ServicoController', 'create'],
        'store' => ['POST', 'ServicoController', 'store'],
        'edit' => ['GET', 'ServicoController', 'edit'],
        'update' => ['POST', 'ServicoController', 'update'],
        'delete' => ['GET', 'ServicoController', 'delete'],
    ],
    'folhaObra' => [
        'create' => ['GET', 'FolhaObraController', 'create'],
        'store' => ['GET', 'FolhaObraController', 'store'],
        'selectCliente' => ['GET', 'FolhaObraController', 'selectCliente'],
    ],
    'linhaObra' => [
        'index' => ['GET', 'LinhaObraController', 'index'],
        'show' => ['GET', 'LinhaObraController', 'show'],
        'create' => ['GET', 'LinhaObraController', 'create'],
        'store' => ['POST', 'LinhaObraController', 'store'],
        'edit' => ['GET', 'LinhaObraController', 'edit'],
        'update' => ['POST', 'LinhaObraController', 'update'],
        'delete' => ['GET', 'LinhaObraController', 'delete'],
    ],
];