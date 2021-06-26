
<?php 

require_once('BaseEntity.php');

class usuarioEntity extends BaseEntity 
{
    protected $id_usuario;
    protected $mail;
    protected $usuario;
    protected $pass;
    private $perfiles;
    
    public function __construct() 
    {
        parent::__construct();
        $this->permisos = array();
    }

    public function getId() 
    {
        return $this->id_usuario;
    }

    public function getMail() 
    {
        return $this->mail;
    }

    public function getUsuario() 
    {
        return $this->usuario;
    }

    public function getPass() 
    {
        return $this->pass;
    }

    public function getPerfiles()
    {
        return $this->perfiles;
    }



    public function setId($id_usuario) 
    {
         $this->id_usuario = $id_usuario;
    }

    public function setmail($mail) 
    {
         $this->mail = $mail;
    }

    public function setusuario($usuario) 
    {
         $this->usuario = $usuario;
    }

    public function setpass($pass) 
    {
         $this->pass = $pass;
    }

    public function poseePerfil($id_usuario){
        foreach($this->getPerfiles() as $perfil){
            if($perfil->getId() == $id_usuario){
                return true;
            }
        }
        return false;
    }

}

?>