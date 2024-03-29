<?php
require_once('Router.php');
require_once('./api/comidas.api.controller.php');

// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');

$router = new Router();

// rutas
$router->addRoute("/comidas", "GET", "comidasApiController", "getComidas");
$router->addRoute("/comidas/:id_comida", "GET", "comidasApiController", "getComida");
$router->addRoute("/comidas/:id_comida", "DELETE", "comidasApiController", "borrarComida");


//run
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);