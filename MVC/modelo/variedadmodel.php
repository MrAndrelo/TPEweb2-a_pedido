
<?php


class variedadModel {
    private $db;
    
    
    public function __construct() {
       $this->db= $this->connect(); //abre conexión
    }

function connect(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_a_pedido;charset=utf8', 'root', '');
    return $db;
}


public function getvariedades(){
    $db_connection=$this->connect();
    $query = $db_connection ->prepare( 'SELECT * FROM variedad'); //preparo la consulta
    $ok = $query->execute(); //ejecuto consulta
    if (!$ok) var_dump ($query -> errorinfo()); //chequeo ejecucion
    $variedad = $query->fetchAll(PDO::FETCH_OBJ); //me da la respuesta
    
    return $variedad;
}	



}