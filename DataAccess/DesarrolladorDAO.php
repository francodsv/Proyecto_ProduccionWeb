<?php

    require_once('DAO.php');
    require_once('../Modelos/DesarrolladorEntity.php');

    class DesarrolladorDAO extends DAO {

        function __construct($con)
        {
            parent::__construct($con);
            $this->table = 'desarrollador';
        }

        public function getOne($id){

            $sql = "SELECT id_desarrollador,nombre FROM desarrollador WHERE id_desarrollador = $id";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'DesarrolladorEntity')->fetch();
            return $resultado;
            
        }  

        public function getAll($where = array()){

            $sql = "SELECT id_desarrollador,nombre FROM users";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'DesarrolladorEntity')->fetchAll();
            return $resultado;
    
        }

    }

?>