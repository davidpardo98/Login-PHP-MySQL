<?php
ob_start();
session_start();
//Evaluamos si el usuario ha iniciado sesión si no está vacia la variables de sesión
//nombre indica que el usuario ha iniciado sesión
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../index.php");
}

else
{
require 'header.php';
require '../modelos/vista1.php';

?>
<div style="padding:8px; background-color:#f5f5f5; color:#000; margin:0 5px; border-radius: 4px;">
	<h2 class="title" align="right" style="color: black !important;font-size: 18px;"><?php echo $_SESSION['nombre']; ?></h2>
	<div class="imagenperfil" align="right">
		<img src="../public/images/david.jpg" width="175" alt="Foto de perfil">
	</div>
</div>

      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Nombre</th>
                            <th><?php echo $rowuser['nombre']; ?></th>
                          </thead>
                          <thead>
                            <th>ID</th>
                            <th><?php echo $rowuser['cedula']; ?></th>
                          </thead>
                          <thead>
                            <th>Email</th>
                            <th><?php echo $rowuser['email']; ?></th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div>
<?php
require 'footer.php';
?>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siPrestamos').addClass("active");
</script>
