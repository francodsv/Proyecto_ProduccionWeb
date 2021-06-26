<?php

    require_once('DAO.php');
    require_once('../Modelos/UserEntity.php');

    class usuarioDAO extends DAO {
       
        protected $perfilDAO;

        function __construct($con) {

            parent::__construct($con);
            $this->table = 'usuario';
            $this->perfilDAO = new PerfilDAO($con);
        }

        public function getOne($data, $by = 'id_usuario') {

            $sql = "SELECT id_usuario,usuario,pass,mail FROM $this->table WHERE $by = '$data'";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UserEntity')->fetch();
            if($resultado){
                $resultado->setPerfiles($this->perfilDAO->getAllByUser($resultado->getIDUsuario()));
            }else{
                $resultado = new UserEntity();
            }
    
            return $resultado;

        }

        public function getAll($where = array()) {

            $sql = "SELECT id_usuario, nombre, pass, mail FROM $this->table";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UserEntity')->fetchAll();
            return $resultado;

        }

        public function save($datos = array()) 
        {   
            $perfil = $datos['perfil'];
            unset($datos['perfil']);

            $save = parent::save($datos); 
           
            $id = $this->con->lastInsertId();

            $sql = '';
            foreach($perfiles as $perfil) 
            {
                $sql .= 'INSERT INTO usuario_perfil VALUES('.$id.','-$perfil.');';
            }

            $this->con->exec($sql);

            return $save;

        }


        public function modify($id, $datos = array()) 
        {
            $perfil = $datos['perfil'];
            unset($datos['perfil']);
            $modify = parent::modify($id, $datos);
        
            $sql = 'DELETE FROM usuario_perfil WHERE id_usuario = '.$id.';';
            foreach($perfiles as $perfil) 
            {
                $sql .= 'INSERT INTO usuario_perfil VALUES('.$id.','-$perfil.');';
            }

            $this->con->exec($sql);

            return $modify;
        }
        


    }

?>