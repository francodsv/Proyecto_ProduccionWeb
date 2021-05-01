
<?php

    require_once('C:\xampp\htdocs\ProdWeb-TP\DataAccess\DAO.php');
    require_once('C:\xampp\htdocs\ProdWeb-TP\Modelos\ProductosEntity.php');

    class ProductosDAO extends DAO {

    function __construct($con) 
    {
        parent::__construct($con);
        $this->table = 'productos';
    }

    public function getOne($id) {
        
        $sql = "SELECT id_producto, id_desarrollador, id_plataforma, id_categoria, nombre, descripcion, precio, stock, destacado, calificacion, fechadelanzamiento FROM productos WHERE id_producto = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ProductosEntity')->fetch();
        return $resultado;

    }

    public function getAll($id) {

        $sql = "SELECT id_producto, id_desarrollador, id_plataforma, id_categoria, nombre, descripcion, precio, stock, destacado, calificacion, fechadelanzamiento FROM productos";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ProductosEntity')->fetchAll();
        return $resultado;

    }

}

?>