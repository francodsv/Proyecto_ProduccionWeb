<?php

require_once('DAO.php'); 
require_once('../Modelos/PermisosEntity.php');

class permisosDAO extends DAO{

    
    public function __construct($con){
        $this->table = 'permisos';
        parent::__construct($con);
    }

   

    public function getAll($where = array()){
        $sql = "SELECT id, nombre, cod, modulo FROM ".$this->table;
        if(!empty($where)){
            $sql .= ' WHERE '.implode(' ',$where);
        } 
        $sql.= " ORDER BY modulo, nombre ASC" ;
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PermisosEntity');
        return $resultado;

    }

    public function getAllByPerfil($perfilId){
        $sql = "SELECT id, nombre, cod, modulo  
                FROM permisos
                INNER JOIN perfil_permisos ON perfil_permisos.permiso = permisos.id
                WHERE perfil = ".$perfilId ;   
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PermisosEntity');
       
        return $resultado->fetchAll();

    }
    
public function getOne($id){}
} 


?>

