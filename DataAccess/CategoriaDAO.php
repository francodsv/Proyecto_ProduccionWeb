
<?php

    require_once('DAO.php');
    require_once('../Modelos/CategoriaEntity.php');

    class CategoriaDAO extends DAO {

        function __construct($con)
        {
            parent::__construct($con);
            $this->table = 'categoria';
        }

        public function getOne($id) {
        
            $sql = "SELECT id_categoria, nombre FROM categoria WHERE id_categoria = $id";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'CategoriaEntity')->fetch();
            return $resultado;

        }

        public function getAll($where = array()){

            $sql = "SELECT id_categoria,nombre FROM users";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'CategoriaEntity')->fetchAll();
            return $resultado;
    
        }

    }

?>