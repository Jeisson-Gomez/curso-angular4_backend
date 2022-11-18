<?php

require_once 'vendor/autoload.php';

use\Slim\App;

$app = new App();

$app->get("/pruebas", function() use($app){
    echo "Hola Mundo desde el Slim de PHP";
});

$app->get("/probando", function() use($app){
    echo "Otro texto Cualquiera";
});

$app->run();