

<?php

    include_once('../DataAccess/ProductosDAO.php');
  

    class gamesBussines {

        protected $productosDao;

        function __construct($con) {

            $this->productosDao = new ProductosDAO($con);

        }

        public function getProductos() {

            return $this->ProductosDao->getAll();

        }

    }

?>