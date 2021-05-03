<?php

require_once('BaseEntity.php');

class ProductosEntity extends BaseEntity 
{
    protected $id_producto;
    protected $id_desarrollador;
    protected $id_plataforma;
    protected $id_categoria;
    protected $descripcion;
    protected $precio;
    protected $stock;
    protected $destacado;
    protected $calificacion;
    protected $fechadelanzamiento; 
    
    function __construct() {

        parent::__construct();
        // $this->id_desarrollador = array();
        // $this->id_plataforma = array();
        // $this->id_categoria = array();`
    }

    public function getIDProducto() {

        return $this->id_producto;

    }

    public function getIDDesarrollador() {

        return $this->id_desarrollador;

    }

    public function getIDPlataforma() {

        return $this->id_plataforma;

    }

    public function getIDCategoria() {

        return $this->id_categoria;

    }

    public function getDescripcion() {

        return $this->descripcion;

    }

    public function getPrecio() {

        return $this->precio;

    }

    public function getStock() {

        return $this->stock;

    }

    public function getDestacado() {

        return $this->destacado;

    }

    public function getCalificacion() {

        return $this->calificacion;

    }

    public function getFechaLanzamiento() {

        return $this->fechadelanzamiento;

    }

    /*--------------------------------------------------*/

    public function setIDProducto($id_producto) {

        $this->id_producto = $id_producto;

    }

    public function setIDDesarrollador($id_desarrollador) {

        $this->id_desarrollador = $id_desarrollador;

    }

    public function setIDPlataforma($id_plataforma) {

        $this->id_plataforma = $id_plataforma;

    }

    public function setIDCategoria($id_categoria) {

        $this->id_categoria = $id_categoria;

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

    public function getFechaLanzamientoo($fechadelanzamiento) {

        $this->fechadelanzamiento = $fechadelanzamiento;

    }

} 
 ?>