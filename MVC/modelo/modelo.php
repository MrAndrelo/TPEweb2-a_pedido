<?php



//class UsuarioLoggeado {
//
  //          private $db;
//
  //          public function __construct() {
    //            $this->db = new PDO('mysql:host=localhost;dbname=db_a_pedido;charset=utf8', 'root', '');
      //      }
//
  //          /**
    //         * Retorna un usuario según el username pasado.
      //       */
        //    public function getByUsername($username) {
          //      $query = $this->db->prepare('SELECT * FROM usuarios WHERE username = ?');
            //    $query->execute(array($username));
//
  //              return $query->fetch(PDO::FETCH_OBJ);
    //        }
//
  //      }//


class ComidasModel {

    function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_a_pedido;charset=utf8', 'root', '');
        return $db;
    }


	public function getComidas(){
        $db_connection = connect(); //abro conexion
        $query = $db_connection ->prepare( 'SELECT * FROM comidas'); //preparo la consulta
        $ok = $query->execute(); //ejecuto consulta
        if (!$ok) var_dump ($query -> errorinfo()); //chequeo ejecucion
        $comidas = $query->fetchAll(PDO::FETCH_OBJ); //me da la respuesta
        
        return $comidas;
    }	

    function mostrarComidas() {
        $comidas = getComidas();
        $html = "<ul>";
        foreach ($comidas as $comida) {
            $html .="<li> {$comida->nombre}:{$comida->precio} </li>";
        };
        $html.="</ul>";

        echo $html;
    }
}

mostrarComidas();

    function InsertarComida($nombre, $precio){

        $sentencia = $this->db->prepare('INSERT INTO comidas(nombre, precio) VALUES(?,?,?,?)');
        $sentencia->execute(array($nombre, $precio));
    }

    function EditarComida($id){
        $sentencia =  $this->db->prepare('UPDATE comidas SET finalizada=1 WHERE id=?');
        $sentencia->execute(array($id));
    }

    function BorrarComida($id){
        $sentencia = $this->db->prepare('DELETE FROM comidas WHERE id=?');
        $sentencia->execute(array($id));
    }


?>
