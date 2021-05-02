<?php

require_once('DAO.php');
require_once('DesarrolladorDAO.php');
require_once('PlataformaDAO.php');
require_once('CategoriaDAO.php');
require_once('../Modelos/ProductosEntity.php');

class ProductosDAO extends DAO {

    protected $DesarrolladorDao;
    protected $PlataformaDao;
    protected $CategoriaDao;

    function __construct($con) 
    {
        parent::__construct($con);
        $this->table = 'productos';
        $this->DesarrolladorDao = new DesarrolladorDAO($con);
        $this->PlataformaDao = new PlataformaDAO($con);
        $this->CategoriaDao = new CategoriaDAO($con);
    }

    public function getOne($id) {
        
        $sql = "SELECT id_producto, id_desarrollador, id_plataforma, id_categoria, nombre, descripcion, precio, stock, destacado, calificacion, fechadelanzamiento FROM $this->table WHERE id_producto = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ProductosEntity')->fetch();

/*        $resultado->setDesarrollador($this->DesarrolladorDao->getOne($resultado->getDesarrollador())); 
        $resultado->setPlataforma($this->PlataformaDao->getOne($resultado->getPlataforma())); 
        $resultado->setCategoria($this->CategoriaDao->getOne($resultado->getCategoria())); 
*/
        return $resultado;

    }

    public function getAll($where = array()) {

        $sql = "SELECT id_producto, id_desarrollador, id_plataforma, id_categoria, nombre, descripcion, precio, stock, destacado, calificacion, fechadelanzamiento FROM $this->table";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ProductosEntity')->fetchAll();

        foreach($resultado as $index=>$res){
/*            $resultado[$index]->setDesarrollador($this->DesarrolladorDao->getOne($res->getDesarrollador()));
            $resultado[$index]->setPlataforma($this->PlataformaDao->getOne($res->getPlataforma()));
            $resultado[$index]->setCategoria($this->CategoriaDao->getOne($res->getCategoria()));
*/
        }

    return $resultado;

    }

}

?>