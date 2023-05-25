<?php
//require './vendor/autoload.php';
define('APP_NAME', 'Projeto-PWS');
define('INVALID_ACCESS_ROUTE', 'index?c=login&a=login');


ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/PWS-projeto',
        )
    );
});
