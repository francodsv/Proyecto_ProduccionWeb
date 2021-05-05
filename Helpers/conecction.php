<?php
    require_once('../Config/DataBase.php');

    try{
        $con = new PDO("mysql:host=$dbHost;dbname=$dbName;port=$dbPort",$dbUser,$dbPass);
        //print "Conexión exitosa!";
    }catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage();
        die();
    }
?>


