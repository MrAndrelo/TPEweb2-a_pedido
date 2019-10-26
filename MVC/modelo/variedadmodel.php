
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


public function getvariedad(){
    $db_connection=$this->connect();
    $query = $db_connection ->prepare( 'SELECT * FROM variedad'); //preparo la consulta
    $ok = $query->execute(); //ejecuto consulta
    if (!$ok) var_dump ($query -> errorinfo()); //chequeo ejecucion
    $variedad = $query->fetchAll(PDO::FETCH_OBJ); //me da la respuesta
    
    return $variedad;
}	


function mostrarVariedad() {
    $variedades = getVariedad();
    $html = "<ul>";
    foreach ($variedades as $variedad) {
        $html .="<li> {$variedad->nombre} </li>";
        $html .="<li> {$variedad->ingredientes} </li>";
    }
    $html.="</ul>";
    echo $html;
}

public function insertarVariedad($nombre, $ingredientes){
    
    $sentencia = $this->db->prepare('INSERT INTO variedad(nombre) VALUES(?)');
    $sentencia = $this->db->prepare('INSERT INTO variedad(ingredientes) VALUES(?)');
    $sentencia->execute(array($nombre, $ingredientes));
    
}

public function editarVariedad($id_variedad,$nombre, $ingredientes){
    $sentencia =  $this->db->prepare('UPDATE variedad SET nombre=? SET ingredientes=? WHERE id_variedad=?');
    $sentencia->execute(array($nombre,$ingredientes, $id_variedad ));
}

public function borrarVariedad($id_variedad){
    $sentencia = $this->db->prepare('DELETE FROM variedad WHERE id_variedad=?');
    $sentencia->execute(array($id_variedad));
}

}