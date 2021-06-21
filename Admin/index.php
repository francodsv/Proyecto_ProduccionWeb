
<?php  

session_start();

include('../Helpers/conecction.php');
include('../LogicaNegocio/loginBussines.php');

loginB = new loginBussines($con);

    if(isset($_POST['login'])) 
    {
        $loginB->loginUser($_POST);
    }

    if(isset($_GET['logout'])) 
    {
        $loginB->logout();
    }
    if(!$loginB->isLoged())
    {
        header('Location:login.php');
    }

?>

<a href="?logout">Salir</a>