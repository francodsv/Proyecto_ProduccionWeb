<?php

    class Desarrollador{

        protected $id_desarrollador;
        protected $nombre;

        public function __construct(){
        }
        public function getId(){
            return $this->id_desarrollador;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }

?>