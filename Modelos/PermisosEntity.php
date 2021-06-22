<?php
 
class PermisosEntity {

    protected $id;
    protected $nombre;
    protected $cod;
    protected $modulo;

     
    public function getId(){
        return $this->id;
    } 

    public function setId($id){
        $this->id = $id;
    }
 
    
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
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
        $this->module = $modulo;
    }
}


?>