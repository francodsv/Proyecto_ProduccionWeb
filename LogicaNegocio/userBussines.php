<?php

    include_once('../DataAccess/UsuarioDAO.php');
  

    class userBussines {

        protected $UsuarioDao;

        function __construct($con) {

            $this->UsuarioDao = new UsuarioDAO($con);

        }

        public function getUser($id_usuario) {

            $user = $this->UsuarioDao->getOne($id_usuario);
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
            if(empty($datos['pass'])) 
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