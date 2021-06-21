<?php

require_once('../DataAccess/PerfilDAO.php');

class PerfilBusiness{

    protected $PerfilDAO;

    function __construct($con){
        $this->PerfilDAO = new PerfilDAO($con);
    }

    public function getPerfiles(){
        $users = $this->PerfilDAO->getAll(); 

        return $users;
    }

    

}