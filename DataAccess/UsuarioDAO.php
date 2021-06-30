<?php

    require_once('DAO.php');
    require_once('PerfilDAO.php');
    require_once('../Modelos/UsuarioEntity.php');

    class usuarioDAO extends DAO {
       
        protected $perfilDAO;

        public function __construct($con) {

            parent::__construct($con);
            $this->table = 'usuarios';
            $this->perfilDAO = new PerfilDAO($con);
        }

        public function getOne($data, $by = 'id_usuario') {

            $sql = "SELECT id_usuario,nombre,usuario,pass,mail FROM $this->table WHERE $by = '$data'";
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetch();
            if($resultado){
                $resultado->setPerfiles($this->perfilDAO->getAllByUser($resultado->getIDUsuario()));
            }else{
                $resultado = new UsuarioEntity();
            }
    
            return $resultado;

        }

        public function getAll($where = array()){

            $sql = "SELECT id_usuario,nombre,usuario,pass,mail FROM $this->table"; 
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'UsuarioEntity')->fetchAll();
            foreach($resultado as $index=>$user){
                $resultado[$index]->setPerfiles($this->perfilDAO->getAllByUser($user->getIDUsuario()));
            }
            return $resultado;
    
        }

        public function save($datos = array()) 
        {   
            $perfiles = $datos['perfiles'];
            unset($datos['perfiles']);

            $save = parent::save($datos); 
           
            $id = $this->con->lastInsertId();

            $sql = '';
            foreach($perfiles as $perfil) 
            {
                $sql .= 'INSERT INTO usuario_perfil VALUES('.$id.','.$perfil.');';
            }

            $this->con->exec($sql);
            
            return $save;

        }


        public function modify($id, $datos = array()) 
        {
            $perfiles = $datos['perfiles'];
            unset($datos['perfiles']);
            $modify = parent::modify($id, $datos);
        
            $sql = 'DELETE FROM usuario_perfil WHERE id_usuario = '.$id.';';
            foreach($perfiles as $perfil) 
            {
                $sql .= 'INSERT INTO usuario_perfil VALUES('.$id.','.$perfil.');';
            }

            $this->con->exec($sql);

            return $modify;
        }

        public function delete($id){
        
            $sql = 'DELETE FROM usuario_perfil WHERE id_usuario = '.$id.';';
            $this->con->exec($sql);
            return parent::delete($id);
        }
        


    }

?>