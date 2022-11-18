<?php

require_once 'vendor/autoload.php';

use\Slim\App;

$app = new App();

$db = new mysqli('localhost', 'root', ' ', 'curso_angular4');

$app->get("/pruebas", function() use($app, $db){
    echo "Hola Mundo desde el Slim de PHP";
});

$app->get("/probando", function() use($app){
    echo "Otro texto Cualquiera";
});

$app->post('/productos', function() use($app, $db){
    $json = $request->getBody()->getContents();
    $data = json_decode($json, true);
    
    var_dump($json);
    var_dump($data);
});

$app->run();