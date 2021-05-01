<?php

    require_once('C:\xampp\htdocs\ProdWeb-TP\Config\DataBase.php');

    try{
        $con = new PDO("mysql:host=$dbHost;dbname=$dbName;port=$dbPort",$dbUser,$dbPass);
    }catch(PDOException $error){
        echo $error->getMessage();
        die();
    }

?>