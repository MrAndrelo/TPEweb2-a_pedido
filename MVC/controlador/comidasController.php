<?php

require_once "MVC/modelo/comidasModel.php";
require_once "MVC/vista/comidasView.php";

class ComidasControlador {
    private $comidasModel;
    private $comidasView;

               public function __construct() {
                $this->comidasModel = new ComidasModel ();
                $this->comidasView = new ComidasView ();
               }

    

    public function getComidas(){
       
        $comidas = $this->comidasModel->getComidas(); //variable con el arreglo de comidas
      //  var_dump ($comidas[1].nombre);
       // echo $comidas[1].nombre;
       //echo $comidas[1]->nombre;
       //llamar a la  instancia de la vista y llamar a una metodo mostrar y pasarle como parametro la variable comidas que es un arreglo,
       //la funcion mostrar despues de va a conectar con smarty para mostrar todas las comidas en un html 
       $titulo='CATEGORIA COMIDAS';
       $this->comidasView->mostrarComidas($comidas,$titulo);
    }	

    public function insertarComida(){
        $nombre = $_POST ['nombre'];
        if (!empty($nombre)){
            $this->comidasModel->insertarComida($nombre);
            header('Location: ' . HOME );
        }else{
            $this->comidasView->showError("no se ha ingresado una categoría");
        }   
    }
    
    public function editarComida(){
        $id = $_GET ['$comida->id_comida'];
        $this->comidasModel->EditarComida($id);
        header('Location: ' . HOME );
         
    }
    
    public function deleteComidas(){
        $id = $_GET ['$comida->id_comida'];
        $this->comidasModel->BorrarComida($id);
        header('Location: ' . HOME );
    }
    

}
?>