
<?php

abstract class DAO{

    protected $con;
    protected $table;

    public abstract function getAll($id);
    public abstract function getOne($id);

    function __construct($con) {

        $this->con = $con;

    }

    

}