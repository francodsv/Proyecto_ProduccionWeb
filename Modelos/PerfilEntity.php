<?php

require_once('BaseEntity.php');

class PerfilEntity extends BaseEntity{

    protected $id_perfil;
    
    
    public function __construct(){
        //$this->id_perfil = array();
        parent::__construct();
    }

    public function getIDPerfil(){
        return $this->id_perfil;
    }

    public function setIDPerfil($id_perfil){
        $this->id_perfil = $id_perfil;
    }
    
    public function getIDPerfil(){
        return $this->id_perfil;
    }

    public function setIDPerfil($id_perfil){
        $this->id_perfil = $id_perfil;
    }
}


?>