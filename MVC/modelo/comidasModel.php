

<?php


class ComidasModel {

    
    private $db;
    
    
    public function __construct() {
       $this->db= $this->connect(); //abre conexión
    }
    
    function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_a_pedido;charset=utf8', 'root', '');
        return $db;
    }

    function getComidas(){
   
        $query = $this->db ->prepare( 'SELECT * FROM comida'); //preparo la consulta
        $ok = $query->execute(); //ejecuto consulta
        if (!$ok) var_dump ($query -> errorinfo()); //chequeo ejecucion
        $comidas = $query->fetchAll(PDO::FETCH_OBJ); //me da la respuesta
        
        return $comidas;
    }


    function mostrarComidas() {
        $comidas = getComidas();
        $html = "<ul>";
        foreach ($comidas as $comida) {
            $html .="<li> {$comida->nombre} </li>";
        }
        $html.="</ul>";
        echo $html;
    }

    function insertarComida($nombre){
        $sentencia = $this->db->prepare('INSERT INTO comida(nombre) VALUES(?)');
        $sentencia->execute(array($nombre));
    }

    function EditarComida($id_comida){
        $sentencia =  $this->db->prepare('UPDATE comida SET finalizada=1 WHERE id=?');
        $sentencia->execute(array($id_comida));
    }

    function BorrarComida($id_comida){
        $sentencia = $this->db->prepare('DELETE FROM comida WHERE id=?');
        $sentencia->execute(array($id_comida));
    }
}
?>