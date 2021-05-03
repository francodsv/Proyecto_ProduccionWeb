<?php

    require_once('DAO.php');
    require_once('../Modelos/CategoriaEntity.php');

    class CategoriaDAO extends DAO {

        function __construct($con){
            
            parent::__construct($con);
            $this->table = 'categoria';
        }

        public function getOne($id) {
           
            try{
                $sql = "SELECT id_categoria, nombre FROM $this->table WHERE id_categoria = $id";
                $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'CategoriaEntity')->fetch();
                return $resultado;
            }catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage();
                die();
            }
            

        }

        public function getAll($where = array()){

            $sql = "SELECT id_categoria,nombre FROM $this->table";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'CategoriaEntity')->fetchAll();
            return $resultado;
            
        }

    }

?>