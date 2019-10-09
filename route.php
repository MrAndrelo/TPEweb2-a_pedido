<?php


require_once "MVC/controlador/controlador.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["db_a_pedido"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$controller = new ComidasController();

if($action == ''){
    $controller->getComidas();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "comidas"){
            $controller->getComidas();
        }elseif($partesURL[0] == "insertar") {
            $controller->InsertarComida();
        }elseif($partesURL[0] == "finalizar") {
            $controller->EditarComida ($partesURL[1]);
        }elseif($partesURL[0] == "borrar") {
            $controller->BorrarComida($partesURL[1]);
        }
    }
}

?>