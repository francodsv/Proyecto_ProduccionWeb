<?php

    include_once('../DataAccess/UsuarioDAO.php');
  

    class loginBussines {

        protected $UsuarioDao;

        function __construct($con) {

            $this->UsuarioDao = new UsuarioDAO($con);

        }

        function login($datos = array()) 
        {
            $usuario = $this->UsuarioDao->getOne($datos['usuario'], 'usuario');
            password_verify($datos['pass'],$usuario['pass'])
            {
                $_SESSION['usuario']['id'] = $usuario->getId();
                $_SESSION['usuario']['usuario'] = $usuario->getUsuario();
                $_SESSION['usuario']['mail'] = $usuario->getMail();
                $_SESSION['usuario']['pass'] = $usuario->getPass();
                $_SESSION['usuario']['permisos'] = $this->getPermisos($usuario);
                
            }
        }

        function getPermisos($usuario) 
        {
            $permisos = array();
            foreach($usuario->getPerfiles() as $perfil) 
            {
                foreach($perfil->getPermisos() as $permiso) 
                {
                    $permiso['cod'][] = $permiso->getCode();
                    $permiso['modulo'][] = $permiso->getModule();
                }
            }
        }

        function logout() 
        {
            unset($_SESSION['usuario']);
        }

        function isLoged() 
        {
            if(!empty($_SESSION['usuario']->getId())) 
            {
                return true;
            }
            return false;
        }

    }

?>