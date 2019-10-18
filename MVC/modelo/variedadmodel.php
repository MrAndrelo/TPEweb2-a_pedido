
<?php


class variedadModel {

function connect(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_a_pedido;charset=utf8', 'root', '');
    return $db;
}


public function get(){
    $db_connection = $this->connect(); //abro conexion
    $query = $db_connection ->prepare( 'SELECT * FROM comida'); //preparo la consulta
    $ok = $query->execute(); //ejecuto consulta
    if (!$ok) var_dump ($query -> errorinfo()); //chequeo ejecucion
    $comidas = $query->fetchAll(PDO::FETCH_OBJ); //me da la respuesta
    
    return $comidas;
}	

}