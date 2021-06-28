<?php

require_once('DAO.php');
require_once('PermisosDAO.php');
require_once('../Modelos/PerfilEntity.php');

class PerfilDAO extends DAO{

    protected $permisoDAO;

    public function __construct($con){
        $this->table = 'perfil';
        parent::__construct($con);
        $this->permisoDAO = new PermisosDAO($con);
    }

   

    public function getAll($where = array()){
        $sql = "SELECT id_perfil, nombre FROM ".$this->table;
        if(!empty($where)){
            $sql .= ' WHERE '.implode(' ',$where);
        } 
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PerfilEntity');
        return $resultado;

    }

    public function getAllByUser($id_usuario){
        $sql = "SELECT perfil.id_perfil, nombre  
                FROM perfil
                INNER JOIN usuario_perfil ON usuario_perfil.id_perfil = perfil.id_perfil
                WHERE id_usuario = ".$id_usuario;  
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PerfilEntity')->fetchAll();
        foreach($resultado as $index=>$perfil){
            $resultado[$index]->setPermisos($this->permisoDAO->getAllByPerfil($perfil->getIDPerfil()));
        }
        return $resultado;

    }
    
    public function getOne($id_perfil){
            $sql = "SELECT id_perfil, nombre FROM perfil WHERE id_perfil = ".$id_perfil;
            $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PerfilEntity')->fetch();
            $resultado->setPermisos($this->permisoDAO->getAllByPerfil($id_perfil));

            return $resultado;
    }

    public function save($data = array()){
        $permisos = $data['permisos'];
        unset($data['permisos']);
        $save = parent::save($data);
        $perfilid_perfil = $this->con->lastInsertid_perfil();
        $sql = '';
        foreach($permisos as $permiso){
            $sql .= 'INSERT INTO perfil_permisos VALUES ('.$perfilid_perfil.','.$permiso.');'; 
        }
        $this->con->exec($sql);
        return $save;
    }

    public function modify($id_perfil, $data = array()){
        $permisos = $data['permisos'];
        unset($data['permisos']);
        $save = parent::modify($id_perfil, $data ); 
        $sql = 'DELETE FROM perfil_permisos WHERE perfilid_perfil = '.$id_perfil.';';
        foreach($permisos as $permiso){
            $sql .= 'INSERT INTO perfil_permisos VALUES ('.$id_perfil.','.$permiso.');'; 
        }
        $this->con->exec($sql);
        return $save;
        
    }

    public function delete($id_perfil){
        $sql = 'SELECT count(1) as cantid_perfilad FROM usuario_perfil WHERE perfilid_perfil = '.$id_perfil;
        $cantid_perfilad = $this->con->query($sql)->fetch();
        
        if($cantid_perfilad['cantid_perfilad'] > 0){
            return 0;
        }else{
            $sql = 'DELETE FROM perfil_permisos WHERE perfilid_perfil = '.$id_perfil.';';
            $this->con->exec($sql);
            return parent::delete($id_perfil);
        }
    }
} 

?>