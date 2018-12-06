<?php
     include_once 'funciones/sesiones.php';
     include_once 'templates/header.php';
     include_once 'funciones/funciones.php';
     $id = $_GET['id'];
    
     if(!filter_var($id,FILTER_VALIDATE_INT)){
         die("Error");
     }
     
     include_once 'templates/barra.php' ;
     include_once 'templates/navegacion.php';
?>
         

 
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Configuracion Productos
        <small></small>
      </h1>
     
    </section>

      <div class="row">
          <div class="col-md-8">
              
         
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Productos</h3>

         
        </div>
        <div class="box-body">
            
            <?php 
            
            $sql= "SELECT * FROM products WHERE producto_id= $id ";
            $resultado = $conn->query($sql);
            $producto = $resultado->fetch_assoc();

            ?>
            
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-producto.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre" value="<?php echo $producto['nombre_producto']; ?>">
                </div>
                  <div class="form-group">
                  <label for="descripcion">Descripcion:</label>
                  <input type="text" class="form-control" id="descripcion_producto" name="descripcion_producto" placeholder="Descripcion del producto" value="<?php echo $producto['descripcion_producto']; ?>" >
                </div>
                <div class="form-group">
                  <label for="precio">Precio:</label>
                  <input type="text" class="form-control" id="precio_producto"  name="precio_producto" placeholder="Precio del producto " value="<?php echo $producto['precio_producto']; ?>">
                </div>
                
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="actualizar">
                   <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                  <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
      </div>
  </div>
  <!-- /.content-wrapper -->

<?php
     include_once 'templates/footer.php';
?>