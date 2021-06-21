<?php

    include_once('../DataAccess/UsuarioDAO.php');
  

    class plataformaBussines {

        protected $UsuarioDao;

        function __construct($con) {

            $this->UsuarioDao = new UsuarioDAO($con);

        }

        public function getUser($id) {

            $user = $this->UsuarioDao->getOne();
            return $user;

        }

        public function getUsers() {

            $users = $this->UsuarioDao->getAll();
            return $users;

        }

        public function saveUser($datos) 
        {
            $datos['pass'] = password_hash($datos['pass'],PASSWORD_DEFAULT);
            $this->UsuarioDAO->save($datos);
        }

        public function modifyUser($id, $datos) 
        {
            if(empty($datos[pass])) 
            {
                $datos['pass'] = password_hash($datos['pass'],PASSWORD_DEFAULT);
            }
            $this->UsuarioDAO->modify($id, $datos);
        }

        public function deleteUser($id) 
        {
            $this->UsuarioDAO->modify($id);
        }

    }

?>