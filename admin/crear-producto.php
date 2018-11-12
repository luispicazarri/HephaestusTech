<?php
     include_once 'funciones/sesiones.php';
     include_once 'funciones/funciones.php';
     include_once 'templates/header.php';
     include_once 'templates/barra.php' ;
     include_once 'templates/navegacion.php';
?>



<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Crear Producto
            <small>Llena el formulario para crear un producto</small>
        </h1>

    </section>

    <div class="row">
        <div class="col-md-8">


            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Crear Producto</h3>


                    </div>
                    <div class="box-body">
                        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-producto.php">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre del producto">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripcion:</label>
                                    <input type="text" class="form-control" id="descripcion_producto" name="descripcion_producto" placeholder="Descripcion del producto">
                                </div>
                                <div class="form-group">
                                    <label for="precio">Precio:</label>
                                    <input type="text" class="form-control" id="precio_producto" name="precio_producto" placeholder="Precio del producto ">
                                </div>


                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <input type="hidden" name="registro" value="nuevo">
                                <button type="submit" class="btn btn-primary" >Añadir</button>
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
