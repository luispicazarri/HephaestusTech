<?php
     include_once 'funciones/sesiones.php';
     include_once 'templates/header.php';
     include_once 'funciones/funciones.php';
     include_once 'templates/barra.php' ;
     include_once 'templates/navegacion.php';
?>



<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de Productos
            <small></small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="registros" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                try{
                                    $sql="SELECT producto_id,nombre_producto,descripcion_producto,precio_producto FROM products";
                                    $resultado=$conn->query($sql);
                                }catch(Exeption $e){
                                    $error=$e->getMessage();
                                    echo $error;
                                }
                                while($productos = $resultado->fetch_assoc() ) { ?>
                                <tr>
                                    <td>
                                        <?php echo $productos['nombre_producto']; ?>
                                    </td>
                                    <td>
                                        <?php echo $productos['descripcion_producto']; ?>
                                    </td>
                                    <td>
                                        <?php echo $productos['precio_producto']; ?>
                                    </td>
                                    <td>

                                        <a href="editar-producto.php?id=<?php echo $productos['producto_id'] ?>" class="btn bg-orange btn-flat margin">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-id="<?php echo $productos['producto_id']; ?>" data-tipo="producto" class="btn bg-maroon btn-flat margin borrar_registro">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                    </td>

                                </tr>
                                <?php } ?>




                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
     include_once 'templates/footer.php';
?>
