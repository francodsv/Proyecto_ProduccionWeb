<?php

$hostname 	= 'localhost';
$database   = 'gamestore';
$username 	= 'root';
$password 	= '';
$port		= '3306';

try {
    $con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database,$username,$password);
    print "Conexión exitosa!";
}
catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage();
    die();
}

?>