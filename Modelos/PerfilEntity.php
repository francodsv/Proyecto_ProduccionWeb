<?php

require_once('BaseEntity.php');

class PerfilEntity extends BaseEntity{

    protected $permisos;
    protected $id_perfil;
    
    public function __construct(){
        $this->permisos = array();
        parent::__construct();
    }

    public function getPermisos(){
        return $this->permisos;
    }

    public function setPermisos($permisos){
        $this->permisos = $permisos;
    }

    public function getIDPerfil(){
        return $this->id_perfil;
    }
    
}


?>