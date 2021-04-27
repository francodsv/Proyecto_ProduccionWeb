<?php require_once 'mysql-login.php';?>

<?php
try {
    $con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database,$username,$password);
    print "Conexión exitosa!";
}
catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage();
    die();
}
?>

<li>SQL - SELECT </li>
    <?php 
        $query = "SELECT * FROM productos;";
        $resultado = $con->query($query);        
         var_dump($resultado);		
    ?>   
            <table border="1">
                <?php foreach ($resultado as $rows) {
					?>
                    <tr>
                        <td><?php echo $rows["id_producto"]?></td>
                        <td><?php echo $rows["nombre"]?></td>
                        <td><?php echo $rows["precio"]?></td>
                        <td><?php echo $rows["fechadelanzamiento"]?></td>
                    </tr>
                <?php }?>
            </table>