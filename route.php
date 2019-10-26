<?php
require_once "./MVC/controlador/comidasController.php";
require_once "./MVC/controlador/variedadController.php";
require_once "./MVC/controlador/userController.php"; //importa el archivo que tiene la clase que vamos a usar
require_once "Router.php";

$action = $_GET["action"]; //
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
//define("BASE_URL", 'http://'.$_SERVER["db_a_pedido"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

define("HOME", BASE_URL . 'comidas');
define("variedad", BASE_URL . 'variedad');

$r = new Router();


// rutas
// $r->addRoute("login", "GET", "LoginController", "showLogin");
// $r->addRoute("verify", "POST", "LoginController", "verifyUser");
$r->addRoute("logout", "GET", "LoginController", "logout");
$r->addRoute("comidas", "GET", "ComidasControlador", "getComidas");
$r->addRoute("editarComida/:ID_COMIDA", "POST", "ComidasControlador", "editarComida");
$r->addRoute("borrarComida/:ID_COMIDA", "GET", "ComidasControlador", "borrarComida");
$r->addRoute("comida/insertar", "POST", "ComidasControlador", "insertarComida");
$r->addRoute("login","POST","LoginController","verifyUser");
$r->addRoute("login","GET","LoginController","showLogin");
$r->addRoute("variedad", "GET", "variedadControlador", "getVariedad");
$r->addRoute("editarVariedad/:ID_VARIEDAD", "POST", "variedadControlador", "editarVariedad");
$r->addRoute("borrarVariedad/:ID_VARIEDAD", "GET", "variedadControlador", "borrarVariedad");
$r->addRoute("variedad/insertar", "POST", "variedadControlador", "insertarVariedad");

// //Ruta por defecto.
$r->setDefaultRoute("comidasControlador", "getComidas");

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

/*
$controller = new ComidasControlador(); //instancio al controlador de comidas

if($action == ''){
    $controller->getComidas(); //hacer el home (getHome)
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "comidas"){
            $controller->getComidas(); //busca la funcion getComidas en el controlador
        }
        elseif($partesURL[0] == "insertar") {
             $controller->insertarComida();
        }
        elseif($partesURL[0] == "editar") {
            $controller->editarComida ($partesURL[0]);
        }
        elseif($partesURL[0] == "borrar") {
            $controller->deleteComidas($partesURL[0]);
        }
    }
}
*/
