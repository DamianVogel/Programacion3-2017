<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/clases/AccesoDatos.php';
require __DIR__.'/clases/usuario.php';
require __DIR__.'/clases/bicicleta.php';
require __DIR__.'/clases/ventas.php';


$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$app = new \Slim\App(["settings" => $config]);



//PARCIAL
$app->post('/validarusuario', function (Request $request, Response $response) {

 $ArrayDeParametros = $request->getParsedBody();  

$mail=$ArrayDeParametros['mail'];
$nombre=$ArrayDeParametros['nombre'];
$clave=$ArrayDeParametros['clave'];

$rta = Usuario::validarUsuario($nombre, $mail, $clave);
return $response->withJson($rta);
});

$app->post('/altabicicleta', function (Request $request,Response $response) {

 $ArrayDeParametros = $request->getParsedBody();  

$color=$ArrayDeParametros['color'];
$rodado=$ArrayDeParametros['rodado'];
$marca=$ArrayDeParametros['marca'];

$rta = Bicicleta::altabicicleta($color, $rodado, $marca);
return $response->withJson($rta);
});

$app->get('/listadobicicletas', function (Request $request,Response $response) {

$rta = Bicicleta::traertodaslasbicis();
return $response->withJson($rta);
});

  
$app->get('/traerunabici/[{id}]', function ($request, $response, $args) {
          
          $uno = Bicicleta::traerunabici($args['id']);
          return $response->withJson($uno);
        });

$app->get('/traerbicicolor/[{color}]', function ($request, $response, $args) {
          
          $uno = Bicicleta::traerbicicolor($args['color']);
          return $response->withJson($uno);
        });

$app->delete('/borrarbici/[{id}]', function ($request, $response, $args) {
          
          $uno = Bicicleta::borrarbici($args['id']);
          return $response->withJson($uno);
        });

$app->post('/venta[/]', function (Request $request, Response $response) {
  
  	$destino="./FotosVentas/";
  	$ArrayDeParametros = $request->getParsedBody();

  	$idventa= $ArrayDeParametros['idventa'];
  	$nombrecliente= $ArrayDeParametros['nombrecliente'];
  	$fecha= $ArrayDeParametros['fecha'];
        $precio= $ArrayDeParametros['precio'];
  	
    	$archivos = $request->getUploadedFiles();
  
	$nombreAnterior=$archivos['foto']->getClientFilename();
        $nombre=$idventa.$nombrecliente;
	$extension= explode(".", $nombreAnterior)  ;
	//var_dump($nombreAnterior);
	$extension=array_reverse($extension);

  	$archivos['foto']->moveTo($destino.$nombre.".".$extension[0]);
    
	$path = $destino.$nombre.".".$extension[0];

        $rta = Ventas::altaventa($nombrecliente,$fecha,$precio,$path);
	return $response->withJson($rta);

});


$app->run();
