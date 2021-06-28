<?php
error_reporting(E_ALL);
ini_set("display_errors", 1); 
include_once('header.php');


?>

<?php

    $datos = array( 'nombre'=>'Pepito',
                    'mail'=>'email@email.com',
                    'usuario'=>'pepitos',
                    'pass'=>'123456',
                    'perfiles' => array(1));
    echo $bUser->saveUser($datos);


?>

<pre><?php //var_dump($bUser->getUsers())?></pre>
