<?php 

require_once('BaseEntity.php');

class CategoryEntity extends BaseEntity {

    protected $id_categoria;

    function __construct(){

        parent::__construct();

    }

    public function getIDCategoria() {

        return $this->id_categoria;

    }

    public function setIDCategoria($id_categoria) {

        $this->id_categoria = $id_categoria;

    }

}
?>