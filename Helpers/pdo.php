<?php
require_once('./../Config/connection.php');
try {
    $con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database,$username,$password);
    print "Conexión exitosa!";
}
catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage();
    die();
}
?>

