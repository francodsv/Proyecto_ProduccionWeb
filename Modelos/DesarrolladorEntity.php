<?php 

require_once('BaseEntity.php');

class desarrolladorEntity extends BaseEntity
{
    protected $id_desarrollador;

    function __construct() {

        parent::__construct();

    }

    public function getIDDesarrollador() {

        return $this->id_desarrollador;

    }

    public function setIDDesarrollador($id_desarrollador) {

        $this->id_desarrollador = $id_desarrollador;

    }

}
?>