<?php

    class Productos{

        protected $id_producto;
        protected $nombre;

        public function __construct(){
        }
        public function getId(){
            return $this->id_producto;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }

?>