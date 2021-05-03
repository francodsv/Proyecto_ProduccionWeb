<?php

    include_once('../DataAccess/DesarrolladorDAO.php');
  

    class desarrolladorBussines {

        protected $DesarrolladorDao;

        function __construct($con) {

            $this->DesarrolladorDao = new DesarrolladorDAO($con);

        }

        public function getDesarrollador() {

            $desarrollador = $this->DesarrolladorDao->getAll();
           /* echo '<pre>'; var_dump($desarrollador);echo '</pre>'; */
            return $desarrollador;

        }

    }

?>