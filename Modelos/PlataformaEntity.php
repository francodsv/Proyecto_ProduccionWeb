<?php 

require_once('BaseEntity.php');

class PlataformaEntity extends BaseEntity {
    
    protected $id_plataforma;

    function __construct() {

        parent::__construct();

    }

    public function getIDPlataforma() {

        return $this->id_plataforma;

    }

    public function setIDPlataforma($id_plataforma) {

        $this->id_plataforma = $id_plataforma;

    }

}
?>