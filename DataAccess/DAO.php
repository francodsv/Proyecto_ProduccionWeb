
<?php

abstract class DAO{

    protected $con;
    protected $table;

    function __construct($con) {

        $this->con = $con;

    }

    public abstract function getOne($id);
    public abstract function getAll($where = array());

    public function save($datos = array()) 
    {
        $column = array();
        $values = array();

        foreach($datos as $key => $value) {
            if(!empty($value)) 
            {
                $column[] = $key;
                $values[] = $value;
            }
        }

        $sql = "INSERT INTO ".$this->table."(".implode(',',$column).") VALUES ('".implode("','",$values)."')";
        echo $sql;die();
        return $this->con->exec($sql);
    }

    public function modify($id, $datos = array()) 
    {
        $set = array();

        foreach($datos as $key => $value) 
        {
            if(!empty($value)) 
            {
                $set[] = $key." = ' ".$value." ' ";
            }
        }
        /*
        if(!isset($data['active'])) 
        {
            $set[] = " active = 0";
        }
        */

        //$sql = "UPDATE ".$this->table." SET ".implode(',',$set).", fechaModificacion = now() WHERE id = ".$id;
        $sql = "UPDATE ".$this->table." SET ".implode(',',$set)."WHERE id = ".$id; 

         return $this->con->exec($sql);
    }
    
    public function delete($id) 
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return $this->con->exec($sql);
    }

}
?>