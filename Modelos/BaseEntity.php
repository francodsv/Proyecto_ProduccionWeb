<?php 

class BaseEntity

{

    protected $id;
    protected $nombre;

    function __construct() 
    {
    }

    public function getId () {

        return $this->id;

    }

    public function getNombre () {

        return $this->nombre;

    }

    public function setId($id) {

        $this->id = $id;

    }

    public function setNombre($nombre) {

        $this->nombre = $nombre;

    }


} 
?>