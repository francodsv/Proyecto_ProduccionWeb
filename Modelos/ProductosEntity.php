<?php

require_once('BaseEntity.php');

class ProductosEntity extends BaseEntity 
{

    protected $desarrollador;
    protected $categoria;
    protected $plataforma;
    protected $descripcion;
    protected $precio;
    protected $stock;
    protected $destacado;
    protected $calificacion;
    protected $fechaLanzamiento; 
    
    function __construct() {

        parent::__construct();
        $this->desarrollador = array();
        $this->plataforma = array();
        $this->categoria = array();
    }

    public function getDesarrollador() {

        return $this->$desarrollador;

    }

    public function getPlataforma() {

        return $this->$plataforma;

    }

    public function getCategoria() {

        return $this->$categoria;

    }

    public function getDescripcion() {

        return $this->$descripcion;

    }

    public function getPrecio() {

        return $this->$precio;

    }

    public function getStock() {

        return $this->$stock;

    }

    public function getDestacado() {

        return $this->$destacado;

    }

    public function getCalificacion() {

        return $this->$calificacion;

    }

    public function getFechaLanzamiento() {

        return $this->$fechaLanzamiento;

    }

    /*--------------------------------------------------*/

    public function setDesarrollador($desarrollador) {

        $this->desarrollador = $desarrollador;

    }

    public function setPlataforma($plataforma) {

        $this->plataforma = $plataforma;

    }

    public function setCategoria($categoria) {

        $this->categoria = $categoria;

    }

    public function setDescripcion($descripcion) {

        $this->descripcion = $descripcion;

    }

    public function setPrecio($precio) {

        $this->precio = $precio;

    }

    public function setStock($stock) {

        $this->stock = $stock;

    }

    public function setDestacado($destacado) {

        $this->destacado = $destacado;

    }

    public function setCalificacion($calificacion) {

        $this->calificacion = $calificacion;

    }

    public function getFechaLanzamientoo($fechaLanzamiento) {

        $this->fechaLanzamiento = $fechaLanzamiento;

    }

}