<?php

    class Plataforma{

        protected $id_plataforma;
        protected $nombre;

        public function __construct(){
        }
        public function getId(){
            return $this->id_plataforma;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }

?>