
<?php

abstract class DAO{

    protected $con;
    protected $table;

    public abstract function getOne($id);
    public abstract function getAll($where = array());
    

    function __construct($con) {

        $this->con = $con;

    }

    

}