(function () {
    "use strict";

    document.addEventListener('DOMContentLoaded', function () {

        if (document.getElementById('mapa')) {
            var map = L.map('mapa').setView([32.533115, -116.965165], 16);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([32.533115, -116.965165]).addTo(map)
                .bindPopup('Edificio 6E <br/> Planta Alta')
                .openPopup();
        }



        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        var pase_ddalert = document.getElementById('pase_ddalert');
        var pase_hushlittlemama = document.getElementById('pase_hushlittlemama');
        var pase_smartdoor = document.getElementById('pase_smartdoor');

        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        var instalacion = document.getElementById('instalacion');


        if (document.getElementById('calcular')) {

            calcular.addEventListener('click', calcularMontos);


            nombre.addEventListener('blur', validarCampos);
            apellido.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarCampos);

            email.addEventListener('blur', validarMail);

            function validarCampos() {
                if (this.value == '') {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = "Este campo es obligatorio!";
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                } else {
                    errorDiv.style.display = 'none';
                    this.style.border = '2px solid #cccccc'
                }
            }

            function validarMail() {
                if (this.value.indexOf("@") > -1) {
                    errorDiv.style.display = 'none';
                    this.style.border = '2px solid #cccccc'
                } else {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = "Debe tener formato de correo!";
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                }
            }

            function calcularMontos(event) {
                event.preventDefault();
                console.log("has hecho click en Calcular");

                var ddalert = parseInt(pase_ddalert.value, 10) || 0,
                    smartdoor = parseInt(pase_smartdoor.value, 10) || 0,
                    hushlittlemama = parseInt(pase_hushlittlemama.value, 10) || 0,
                    extraInst = parseInt(instalacion.value, 10) || 0;

                var totalPagar = (ddalert * 600) + (smartdoor * 800) + (hushlittlemama * 750) + (extraInst * 250);

                console.log("total a pagar: " + totalPagar);

                var listadoProductos = [];

                if (ddalert >= 1) {
                    listadoProductos.push('D.D.Alert: ' + ddalert);
                }
                if (smartdoor >= 1) {
                    listadoProductos.push('SmartDoor: ' + smartdoor);
                }
                if (hushlittlemama >= 1) {
                    listadoProductos.push('Hush Little Mama: ' + hushlittlemama);
                }
                if (extraInst >= 1) {
                    listadoProductos.push('Instalaciones: ' + extraInst);
                }

                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                }

                suma.innerHTML = "$ " + totalPagar.toFixed(2);
            }
        }
    });
})();


$(function () {

    $('#cuenta-regresiva').countdown('2018/12/14 23:59:59', function (event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });


    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({
                'margin-top': barraAltura + 'px'
            });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({
                'margin-top': '0px'
            });
        }
    });


    $('.menu-movil').on('click', function () {
        $('.navegacion-principal').slideToggle();
    });



});
