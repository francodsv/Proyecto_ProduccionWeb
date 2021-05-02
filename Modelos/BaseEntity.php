<?php 

class BaseEntity

{

    protected $nombre;

    function __construct() 
    {
    }

    public function getNombre () {

        return $this->nombre;

    }

    public function setNombre($nombre) {

        $this->nombre = $nombre;

    }

} 
?>