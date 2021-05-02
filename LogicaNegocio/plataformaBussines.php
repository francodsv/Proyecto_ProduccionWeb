<?php

    include_once('../DataAccess/PlataformaDAO.php');
  

    class plataformaBussines {

        protected $PlataformaDao;

        function __construct($con) {

            $this->PlataformaDao = new PlataformaDAO($con);

        }

        public function getPlataforma() {

            $plataforma = $this->PlataformaDao->getAll();
           /* echo '<pre>'; var_dump($productos);echo '</pre>'; */
            return $plataforma;

        }

    }

?>