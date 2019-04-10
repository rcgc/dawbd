<?php

use Slim\Http\Request;
use Slim\Http\Response;
require_once("../util.php");

// Routes

$app->get('/lab14', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    return $this->renderer->render($response, '../../daw/daw_labs/lab14/index.php', $args);
});

$app->get('/lab20', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    return $this->renderer->render($response, '../../daw/daw_labs/lab20/index.php', $args);
});

$app->get('/reg', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    
    $result=getTablaDescripciones();
        
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
    
    if(isset($data)){
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    //return $this->renderer->render($response, '../cliente/index.php', $args);
});

$app->get('/reg/[{id}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $id = $request->getAttribute('id');
    
    $result=getTablaDescripcionesById($id);
    
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
    
    if(isset($data)){
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    //return $this->renderer->render($response, '../cliente/index.php', $args);
});

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    //index.phtml
    //../../lab25cliente/index.php
    return $this->renderer->render($response, 'index.phtml', $args);
});
