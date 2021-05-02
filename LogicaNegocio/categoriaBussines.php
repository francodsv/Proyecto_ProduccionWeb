<?php

    include_once('../DataAccess/CategoriaDAO.php');
  

    class categoriaBussines {

        protected $CategoriaDao;

        function __construct($con) {

            $this->CategoriaDao = new CategoriaDAO($con);

        }

        public function getCategoria() {

            $categoria = $this->CategoriaDao->getAll();
           /* echo '<pre>'; var_dump($productos);echo '</pre>'; */
            return $categoria;

        }

    }

?>