<?php

    include_once('../DataAccess/ProductosDAO.php');
  

    class gamesBussines {

        protected $productosDao;

        function __construct($con) {

            $this->productosDao = new ProductosDAO($con);

        }

        public function getProductos($datos=array()) {

            $productos = $this->ProductosDao->getAll($datos);
           /* echo '<pre>'; var_dump($productos);echo '</pre>'; */
            return $productos;

        }

    }

?>