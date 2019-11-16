<?php
require_once("./MVC/modelo/comidasModel.php");
require_once("./api/json.view.php");

class comidasApiController
{

    private $comidasModel;
    private $view;

    public function __construct()
    {
        $this->comidasModel = new comidasModel();
        $this->view = new JSONView();
    }

    // public function  getTasks($params = null) {
    //     $comidas = $this->comidasModel->getAll();
    //     $this->view->response($comidas, 200);
    // }

    public function getComida($params = null)
    {
        $id = $params[':id_comida'];

        $comida = $this->comidasModel->getComida($id);
        if ($comida)
            $this->view->response($comida, 200);
        else
            $this->view->response("La comida con el id={$id} no existe", 404);
    }


    public function getComidas($params = null)
    {

        $comidas = $this->comidasModel->getComidas();
        if ($comidas)
            $this->view->response($comidas, 200);
        else
            $this->view->response("File not found", 404);
    }


    public function borrarComida($params = null)
    {
        $id = $params[':id_comida'];

        $this->comidasModel->borrarComida($id);

        $this->view->response('Borrado', 200);
    }
}