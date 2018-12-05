<?php include_once 'includes/templates/header.php' ?>

<section class="seccion contenedor">
    <h2>
        Registro de Usuarios
    </h2>
    <form id="registro" class="registro" action="index.html" method="post">
        <div id="datos_usuario" class="registro caja clearfix">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
            </div>
            <div class="campo">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
            </div>
            <div class="campo">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Tu Email">
            </div>
            <div id="error">

            </div>
        </div>
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
        <div class="resumen" id="resumen">
            <h2>
                Pago y Extras
            </h2>
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
    </form>
</section>


<?php include_once 'includes/templates/footer.php'?>
