
<?php

    require_once('DAO.php');
    require_once('DesarrolladorDAO.php');
    require_once('PlataformaDAO.php');
    require_once('CategoriaDAO.php');
    require_once('../Modelos/ProductosEntity.php');

    class ProductosDAO extends DAO {

    function __construct($con) 
    {
        parent::__construct($con);
        $this->table = 'productos';
    }

    public function getOne($id) {
        
        $sql = "SELECT id_producto, id_desarrollador, id_plataforma, id_categoria, nombre, descripcion, precio, stock, destacado, calificacion, fechadelanzamiento FROM productos WHERE id_producto = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ProductosEntity')->fetch();

        $resultado->setDesarrollador($this->DesarrolladorDAO->getOne($resultado->getDesarrollador()));
        $resultado->setPlataforma($this->PlataformaDAO->getOne($resultado->getPlataforma()));
        $resultado->setCategoria($this->CategoriaDAO->getOne($resultado->getCategoria()));

        return $resultado;

    }

    public function getAll($id) {

        $sql = "SELECT id_producto, id_desarrollador, id_plataforma, id_categoria, nombre, descripcion, precio, stock, destacado, calificacion, fechadelanzamiento FROM productos";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ProductosEntity')->fetchAll();

        foreach($resultado as $index=>$res){
            $resultado[$index]->setDesarrollador($this->DesarrolladorDAO->getOne($res->getDesarrollador()));
            $resultado[$index]->setPlataforma($this->PlataformaDAO->getOne($res->getPlataforma()));
            $resultado[$index]->setCategoria($this->CategoriaDAO->getOne($res->getCategoria()));
        }

        return $resultado;

    }

}

?>