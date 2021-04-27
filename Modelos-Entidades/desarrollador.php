<?php

    class Desarrollador{

        protected $id;
        protected $nombre;

        public function __construct(){
        }
        public function getId(){
            return $this->id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }
?>