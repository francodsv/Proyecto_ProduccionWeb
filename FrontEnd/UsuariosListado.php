<?php

include('header.php');




if(isset($_GET['del'])){
   $bUser->deleteUser($_GET['del']);
   //redirect('UsuariosListado.php');
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Usuarios <a href="UsuariosForm.php"><i class="fas fa-plus"></i></a></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>User</th>
                      <th>Perfiles</th> 
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($bUser->getUsers() as $user){ ?>
                        <tr>
                            <td><?php echo $user->getIDUsuario() ?></td>
                            <td><?php echo $user->getNombre()  ?></td>
                            <td><?php echo $user->getUsuario()  ?></td>
                            <td><?php echo implode(', ',array_map(function ($p){return $p->getNombre();},$user->getPerfiles()) )  ?></td> 
                            <td>
                            <a href="UsuariosForm.php?edit=<?php echo $user->getIDUsuario()?>">EDITAR |<i class="fas fa-th"></i></a>
                            <a href="UsuariosListado.php?del=<?php echo $user->getIDUsuario()?>">ELIMINAR<i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
         
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

include('footer.php'); 

?>
