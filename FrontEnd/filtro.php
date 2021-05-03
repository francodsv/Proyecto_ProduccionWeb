<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                Filtrar por Plataforma
                
                </button>
                
                <div class="dropdown-menu">
                    <?php
                        $postGames = new gamesBussines($con);
                        $postCategoria = new categoriaBussines($con);
                        $postPlataforma = new plataformaBussines($con);
                        foreach($postGames->getProductos() as $post){    
                    ?>
                            <a class="dropdown-item" href="listadoproductos.php?plataformas=<?php echo $post->getIDPlataforma()->getIDPlataforma()?>&generos=<?php echo isset($_GET['generos'])?$_GET['generos']:''?>">
                            <?php echo $post->getIDPlataforma()->getNombre(); ?>
                            </a>
                    <?php
                    }
                    ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="listadoproductos.php?plataformas=&generos=<?php echo isset($_GET['generos'])?$_GET['generos']:''?>">Eliminar filtro</a>
                </div>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    Filtrar por Género
                    
                </button>
                <div class="dropdown-menu">
                    <?php
                
                foreach($postGames->getProductos() as $post){ 
                ?>
                    <a class="dropdown-item" href="listadoproductos.php?generos=<?php echo $post->getIDCategoria()->getIDCategoria()?>&plataformas=<?php echo isset($_GET['plataformas'])?$_GET['plataformas']:''?>">
                        <?php echo $post->getIDCategoria()->getNombre(); ?>
                    </a>
                    <?php
                    }
                ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="listadoproductos.php?generos=&plataformas=<?php echo isset($_GET['plataformas'])?$_GET['plataformas']:''?>">Eliminar filtro</a>
                </div>
            </div>
        </div>
    </div>
</div>

