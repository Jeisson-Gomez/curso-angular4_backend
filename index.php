<?php
require_once 'vendor/autoload.php';
use \Slim\App;
$app = new \Slim\app;

$app->get("/pruebas", function() use($app){
    echo "Hola Mundo desde Slim PHP";
});
$app->run();