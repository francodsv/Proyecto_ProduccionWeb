<?php

require_once('BaseEntity.php');

class PermisosEntity extends BaseEntity {

    protected $id_permiso;
    protected $cod;
    protected $modulo;

/*    public function __construct(){
        //$this->permisos = array();
        parent::__construct();
    }
 */    
    public function getIDPermisos(){
        return $this->id_permiso;
    } 

    public function setIDPermisos($id_permiso){
        $this->id_permiso = $id_permiso;
    }

    public function getCod(){
        return $this->cod;
    }

    public function setCod($cod){
        $this->cod = $cod;
    }

    public function getModulo(){
        return $this->modulo;
    }

    public function setModulo($modulo){
        $this->modulo = $modulo;
    }
}


?>