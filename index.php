<?php include_once 'includes/templates/header.php' ?>

<section class="seccion">
    <h2>
        Faltan
    </h2>
    <div id="cuenta-regresiva" class="cuenta-regresiva contenedor">
        <ul class="clearfix">
            <li>
                <p id="dias" class="numero"></p>Dias</li>
            <li>
                <p id="horas" class="numero"></p>Horas</li>
            <li>
                <p id="minutos" class="numero"></p>Minutos</li>
            <li>
                <p id="segundos" class="numero"></p>Segundos</li>
        </ul>
    </div>
</section>


<section class="programa">
    <div class="contenedor-video">
        <video autoplay loop muted poster="img/bg-video.jpg" width="100%" height="100%" class="video-rep">
                <source src="img/video.mp4" type="video/mp4">
                <source src="img/video.ogv" type="video/ogg">
                <source src="img/video.webm" type="video/webm">
            </video>
    </div>

    <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-evento">
                <div id="america" class="info-curso ocultar clearfix">
                    <h2>
                        Quienes somos
                    </h2>

                    <p>
                        Hephaestus Tech es una empresa comprometida con el desarrollo de tecnología enfocada en la seguidad de las personas, asi como salvaguardar su patrimonio. Nos enfocamos en brindar productos de alta calidad y bajo costo que le permitan protejer a su familia.
                    </p>
                    <a href="contacto.php" class="button float-right">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="dueños contenedor seccion">
    <h2>
        Nosotros
    </h2>
    <ul class="lista-nosotros clearfix">
        <li>
            <div class="nosotros">
                <img src="img/chon.jpg" alt="No se encontro la foto" height="250" width="250">
                <p>Shung Li Chon</p>
            </div>
        </li>
        <li>
            <div class="nosotros">
                <img src="img/lorena.jpg" alt="No se encontro la foto" height="250" width="250">
                <p>Lorena Camacho</p>
            </div>
        </li>
        <li>
            <div class="nosotros">
                <img src="img/pica.jpg" alt="No se encontro la foto" height="250" width="250">
                <p>Luis Picazarri</p>
            </div>
        </li>
    </ul>
</section>

<div id="mapa" class="mapa">

</div>

<section class="precios seccion">
    <h2>
        Producto
    </h2>
    <div class="contenedor">
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
                        <li><i class="fas fa-check"></i>Tecnico de instalación</li>
                    </ul>
                    <a href="producto.php" class="button">Comprar</a>
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
                        <li><i class="fas fa-check"></i>Tecnico de instalación</li>
                    </ul>
                    <a href="producto.php" class="button">Comprar</a>
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
                        <li><i class="fas fa-check"></i>Tecnico de instalación</li>
                    </ul>
                    <a href="producto.php" class="button">Comprar</a>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="newsletter parallax">
    <div class="contenido contenedor">
        <p>
            regístrate al newsletter:
        </p>
        <h3>
            Hephaestus Tech
        </h3>
        <a href="#" class="button transparente">Registro</a>
    </div>
</section>

<section class="section">
    <h2>
        Testimoniales
    </h2>
    <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
            <blockquote>
                <p>
                    Gracias a D.D.Alert se ha visto reducida la cantidad de personas que detenemos con aliento alcoholico.
                </p>
                <footer class="info-testimonial clearfix">
                    <img src="img/david.JPG" alt="No se encontro la foto" height="60px" width="60px">
                    <cite>David Gutierrez <span>Policia Municipal</span></cite>
                </footer>
            </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
                <p>
                    Considero que Hush Little Mama me ha apoyado mucho en el cuidado de mi bebe. Como madre soltera, lo recomiendo ampliamente.
                </p>
                <footer class="info-testimonial clearfix">
                    <img src="img/Kelly.JPG" alt="No se encontro la foto" height="60px" width="60px">
                    <cite>Kelly Inzunza <span>Madre de familia</span></cite>
                </footer>
            </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
                <p>
                    Gracias a D.D.Alert aun tengo a mi hijo conmigo, no se que hubiera pasado si hubiera tomado el volante ese dia.
                </p>
                <footer class="info-testimonial clearfix">
                    <img src="img/Bryan.JPG" alt="No se encontro la foto" height="60px" width="60px">
                    <cite>El Bryan Silva <span>Padre de familia</span></cite>
                </footer>
            </blockquote>
        </div>
    </div>
</section>

<?php include_once 'includes/templates/footer.php'?>
