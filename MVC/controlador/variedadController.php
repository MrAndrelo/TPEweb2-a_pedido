<?php

require_once "MVC/modelo/variedadModel.php";
require_once "MVC/vista/variedadView.php";

class variedadControlador {
    private $variedadModel;
    private $variedadView;

               public function __construct() {
                $this->variedadModel = new variedadModel ();
                $this->variedadView = new variedadView ();
               }

    

    public function getvariedad(){
       
        $variedad = $this->variedadModel->getvariedad();  
       $titulo='VARIEDADES';
       $this->variedadView->mostrarVariedad($variedad,$titulo);
    }	

    public function insertarVariedad(){
        
        $nombre = $_POST ['nombre'];
        $ingredientes = $_POST ['ingredientes'];
        if (!empty($nombre)&&!empty($ingredientes)){
             echo 'sipi' . $nombre . '';
            $this->variedadModel->insertarVariedad($nombre, $ingredientes);
            header('Location: ' . variedad );
        }else{
             
            echo '<script>alert("no se ha ingresado una variedad")</script>';

             //$this->comidasView->showError("no se ha ingresado una categoría");
        }   
    }
    
    public function editarVariedad($params = null){
        $id = $params[':ID_VARIEDAD'];
        $nombre = $_POST ['nombre'];
        $ingredientes = $_POST ['ingredientes'];
        if (!empty($nombre)){
        $this->variedadModel->editarVariedad($id, $nombre, $ingredientes);
        header('Location: ' . variedad );
        }else{  
            echo '<script>alert("no se ha ingresado una variedad")</script>'; 
        }
    }
    
    public function borrarVariedad($params = null) {
        $id = $params[':ID_VARIEDAD'];
        $this->variedadModel->borrarVariedad($id);
        header('Location: ' . variedad );
    }
    

}
?>