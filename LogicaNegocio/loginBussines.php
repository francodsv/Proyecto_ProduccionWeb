<?php

    include_once('../DataAccess/UsuarioDAO.php');
  

    class loginBussines{

        protected $usuarioDao;

        function __construct($con){

            $this->usuarioDao = new UsuarioDAO($con);

        }

        function login($datos = array()){
            $usuario = $this->UsuarioDao->getOne($datos['usuario'],'usuario');
            if(!empty($usuario)){
                if(password_verify($datos['pass'],$usuario->getPass())){
                    $_SESSION['usuario']['id'] = $usuario->getIDUsuario();
                    $_SESSION['usuario']['usuario'] = $usuario->getUsuario();
                    $_SESSION['usuario']['mail'] = $usuario->getMail();
                    $_SESSION['usuario']['pass'] = $usuario->getPass();
                    $_SESSION['usuario']['permisos'] = $this->getPermisos($usuario);
                }
            }else{
                return false;
            }
            return true;
        }

        function getPermisos($usuario){
            $permisos = array();
            foreach($usuario->getPerfiles() as $perfil) {
                foreach($perfil->getPermisos() as $permiso) {
                    $permiso['cod'][] = $permiso->getCode();
                    $permiso['modulo'][] = $permiso->getModule();
                }
            }
        }

        function logout(){
            unset($_SESSION['usuario']);
        }

        function isLoged() {
            if(!empty($_SESSION['usuario']->getIDUsuario())){
                return true;
            }
            return false;
        }

    }

?>