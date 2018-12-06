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
            Crear Compra
            <small>Llena el formulario para crear un nuevo registro</small>
        </h1>

    </section>

    <div class="row">
        <div class="col-md-8">


            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Crear Registro</h3>


                    </div>
                    <div class="box-body">
                        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-registado.php">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="usuario">Nombre</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre_registrado" name="nombre" placeholder="Nombre">
                                </div>

                                <div class="form-group">
                                    <label for="apellido">Apellido:</label>
                                    <input type="text" class="form-control" id="apellido_registrado" name="apellido" placeholder="Apellido">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email_registrado" name="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <div class="paquetes" id="paquetes">
                                        <h2>
                                            Producto
                                        </h2>
                                        <ul class="lista-precios clearfix">
                                            <li>
                                                <div class="tabla-precio">
                                                    <h3>
                                                        D.D.Alert
                                                    </h3>
                                                    <p class="numero">
                                                        $600
                                                    </p>
                                                    <ul>
                                                        <li><i class="fas fa-check"></i>Producto</li>
                                                        <li><i class="fas fa-check"></i>Manual de usuario</li>
                                                    </ul>
                                                    <div class="orden">
                                                        <label for="pase_dia">Cantidad deseada:</label>
                                                        <input type="number" min="0" id="pase_ddalert" size="3" placeholder="0">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tabla-precio">
                                                    <h3>
                                                        SmartDoor
                                                    </h3>
                                                    <p class="numero">
                                                        $800
                                                    </p>
                                                    <ul>
                                                        <li><i class="fas fa-check"></i>Producto</li>
                                                        <li><i class="fas fa-check"></i>Manual de usuario</li>
                                                    </ul>
                                                    <div class="orden">
                                                        <label for="pase_dia">Cantidad deseada:</label>
                                                        <input type="number" min="0" id="pase_smartdoor" size="3" placeholder="0">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tabla-precio">
                                                    <h3>
                                                        Hush Little Mama
                                                    </h3>
                                                    <p class="numero">
                                                        $750
                                                    </p>
                                                    <ul>
                                                        <li><i class="fas fa-check"></i>Producto</li>
                                                        <li><i class="fas fa-check"></i>Manual de usuario</li>
                                                    </ul>
                                                    <div class="orden">
                                                        <label for="pase_dia">Cantidad deseada:</label>
                                                        <input type="number" min="0" id="pase_hushlittlemama" size="3" placeholder="0">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="box-header with-border">
                                            <h3>Elige los productos</h3>
                                        </div>    
                                        <div class="caja clearfix">
                <div class="extras">
                    <div class="orden">
                        <label for="instalacion">Instalación $250</label>
                        <input type="number" min="0" id="instalacion" size="3" placeholder="0">
                    </div>
                    <input type="button" id="calcular" class="button" value="Calcular">
                </div>
                <div class="total">
                    <h3>
                        Resumen:
                    </h3>
                    <div id="lista-productos">

                    </div>
                    <h3>
                        Total:
                    </h3>
                    <div id="suma-total">

                    </div>
                    <input type="submit" id="btnRegistro" class="button" value="Pagar">
                </div>
            </div>
                                </div>
                            </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="hidden" name="registro" value="nuevo">
                        <button type="submit" class="btn btn-primary" id="crear-registro_admin">Añadir</button>
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
