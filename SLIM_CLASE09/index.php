<?php

require '/vendor/autoload.php';
require '/clases/AccesoDatos.php';

$app = new \Slim\App;

//EJEMPLOS
$app->GET('/get', function ($request,$response) {

    $response->getBody()->write("HOLA GET");

    return $response;
});

$app->POST('/post', function ($request,$response) {

    $response->getBody()->write("HOLA POST");

    return $response;
});

//EJEMPLO CON PROGRAMACION
//TODOS
$app->get('/traertodos', function ($request, $response, $args) {

        $_objetoAcceso = AccesoDatos::DameUnObjetoAcceso(); 
	    $consulta = $_objetoAcceso->RetornarConsulta("SELECT ID , CLAVE , MAIL , ESTADO FROM usuario"); 
        $consulta->execute();
        $todos = $consulta->fetchAll();
        return $response->withJson($todos); 
    });

//CON ID
 $app->get('/traeruno/[{id}]', function ($request, $response, $args) {
        
        $_objetoAcceso = AccesoDatos::DameUnObjetoAcceso(); 
	    $consulta = $_objetoAcceso->RetornarConsulta("SELECT ID , CLAVE , MAIL , ESTADO FROM usuario WHERE id=:id"); 
        $consulta->bindParam("id", $args['id']);
        $consulta->execute();
        $uno = $consulta->fetchAll();
        return $response->withJson($uno); 
     });

// //EJEMPLO SIN PROGRAMACION
// //TODOS
// $app->get('/traertodos', function ($request, $response, $args) {

//         $_objetoAcceso = AccesoDatos::DameUnObjetoAcceso(); 
// 	    $consulta = $_objetoAcceso->RetornarConsulta("SELECT ID , CLAVE , MAIL , ESTADO FROM usuario"); 
//         $consulta->execute();
//         $todos = $consulta->fetchAll();
//         return $response->withJson($todos); 
//     });

// //CON ID
//  $app->get('/traeruno/[{id}]', function ($request, $response, $args) {
        
//         $_objetoAcceso = AccesoDatos::DameUnObjetoAcceso(); 
// 	    $consulta = $_objetoAcceso->RetornarConsulta("SELECT ID , CLAVE , MAIL , ESTADO FROM usuario WHERE id=:id"); 
//         $consulta->bindParam("id", $args['id']);
//         $consulta->execute();
//         $uno = $consulta->fetchAll();
//         return $response->withJson($uno); 
//      });



$app->run();

