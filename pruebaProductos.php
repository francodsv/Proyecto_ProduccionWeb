<!DOCTYPE html>
<html lang="en">

<?php 
    include('LogicaNegocio/gamesBussines.php');
    include('Helpers/conecction.php');
    require "header.php";
?>

<body>
    
    <?php
    $gamesB = new gamesBussines($con);

    foreach($gamesB->getProductos() as $producto) {
    ?>
    
        <div>
            <?php echo $producto['nombre']; ?>
        </div>

        <div>
            <?php echo $producto->getCategoria(); ?>
        </div>

        <div>
            <?php echo $producto->getDescripcion(); ?>
        </div>

        <div>
            <?php echo $producto->getPrecio(); ?>
        </div>



        <?php }
        require "footer.php";
        ?>
</body>
</html>