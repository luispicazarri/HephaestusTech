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
            Registro de compras
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
                                    <th>Email</th>
                                    <th>Fecha de compra</th>
                                    <th>Productos</th>
                                    <th>Compra</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                try{
                                    $sql="SELECT registrados.* FROM registrados";
                                    $resultado=$conn->query($sql);
                                }catch(Exeption $e){
                                    $error=$e->getMessage();
                                    echo $error;
                                }
                                while($registrado = $resultado->fetch_assoc() ) { ?>
                                <tr>
                                    <td>
                                        <?php echo $registrado['nombre_registrado'] . "  " . $registrado['apellido_registrado']  ; 
                                        $pagado=$registrado['pagado'];
                                        if($pagado)
                                        {
                                            echo '<span class="badge bg-green"> pagado </span>';
                                        } else {
                                            echo '<span class="badge bg-red"> No pagado </span>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $registrado['email_registrado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $registrado['fecha_registro']; ?>
                                    </td>
                                    <td>
                                        <?php echo $registrado['productos_registrados']; ?>
                                    </td>
                                    <td>
                                        $ <?php echo $registrado['total_pagado']; ?>
                                    </td>
                                    <td>

                                        <a href="editar-registro.php?id=<?php echo $registrado['ID_registrado'] ?>" class="btn bg-orange btn-flat margin">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-id="<?php echo $registrado['ID_registrado']; ?>" data-tipo="registrado" class="btn bg-maroon btn-flat margin borrar_registro">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                    </td>
                                    
                                </tr>
                                <?php } ?>




                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Fecha de compra</th>
                                    <th>Productos</th>
                                    <th>Compra</th>
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
