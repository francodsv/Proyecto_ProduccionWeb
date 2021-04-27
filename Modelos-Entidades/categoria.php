<?php

    class Categoria{

        protected $id_categoria;
        protected $nombre;

        public function __construct(){
        }
        public function getId(){
            return $this->id_categoria;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }

?>