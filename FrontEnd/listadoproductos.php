<!DOCTYPE html>
<html lang="es">

<?php 
    require "header.php";
    require "filtro.php";
?>

<body>

    <main>
        <section>

            <div class="container listadodivcards">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="tituloseccion"><img src="imagenes/iconos/iconocatalogo65.jpg" alt="Icono catálogo tamaño 65" width="65" height="65" class="img-fluid rounded-circle"> CATÁLOGO DE PRODUCTOS</h1>
                    </div>
                </div>

                <div class="row">

                    <?php 
                    foreach($postGames->getProductos() as $post){ 
					$flagPrint = true;
					if(!empty($_GET['plataformas'])  AND $flagPrint ){
						if($_GET['plataformas'] == $postP->getIDPlataforma()){
							$flagPrint = true;
						}else{
							$flagPrint = false;
						}
					}
					if(!empty($_GET['generos']) AND $flagPrint){
						if($_GET['generos'] == $postC->getIDCategoria()){
							$flagPrint = true;
						}else{
							$flagPrint = false;
						}
					}
					
					if($flagPrint){ ?>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <article class="card">
                            <a href="detalleproductos.php?prod=<?php echo $post->getIDProducto()?>"><img src="imagenes/<?php echo $post->getIDProducto().'/caratula.jpg'?>" alt="Carátula <?php echo $post->getNombre()?>" width="580" height="730" class="img-fluid"></a>
                            <h2><a href="detalleproductos.php?prod=<?php echo $post->getIDProducto()?>"><?php echo $post->getNombre() . "<br />"; ?></a></h2>
                            <div class="visualcard">
                            <p><?php echo ucfirst(substr($post->getDescripcion(),0,125)); ?><a href="detalleproductos.php?prod=<?php echo $post->getIDProducto()?>"> Ver más...</a></p>

                            <p class="listadogenero">Género: <?php 
                        
                            foreach($postCategoria->getCategoria() as $postC){
                                if($postC->getIDCategoria() == $post->getIDCategoria()){
                                    echo $postC->getNombre(). "<br />"; } } ?></p> 

                            <p class="listadoplataforma"><?php 
                        
                            foreach($postPlataforma->getPlataforma() as $postP){
                                if($postP->getIDPlataforma() == $post->getIDPlataforma()){
                                    echo $postP->getNombre(). "<br />"; } } ?></p>
                            <a href=#stophere>
                            <p class="listadoprecio"><img src="imagenes/iconos/iconocomprablanco.png" alt="Icono compra blanco" width="25" height="25" class="img-fluid float-left"><?php echo "$".$post->getPrecio() . "<br />"; ?></p>
                            </a>
                            </div>
                        </article>
                    </div>
                        

                    <?php 
                        }
                    }
                    ?>

                </div>
            </div>
        </section>
    </main>

    <?php  
    require "footer.php";
?>


</body>

</html>
