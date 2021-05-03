<?php

    require_once('DAO.php');
    require_once('../Modelos/PlataformaEntity.php');

    class PlataformaDAO extends DAO {

        function __construct($con) {

            parent::__construct($con);
            $this->table = 'plataforma';

        }

        public function getOne($id) {
        
            
            try{
                $sql = "SELECT id_plataforma, nombre FROM $this->table WHERE id_plataforma = $id";
                $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PlataformaEntity')->fetch();
                return $resultado;
            }catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage();
                die();
            }

        }

        public function getAll($where = array()) {

            $sql = "SELECT id_plataforma, nombre FROM $this->table";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PlataformaEntity')->fetchAll();
            return $resultado;

        }

    }

?>