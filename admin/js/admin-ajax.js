$(document).ready(function () {
    $('#crear-admin').on('submit', function (e) {
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) {
                var resultado = data; //para convertir la cadena 
                if (resultado.respuesta == 'exito') {
                    swal(
                        'Correcto',
                        'El administrador se creo correctamente',
                        'success'
                    );
                } else{
                    swal(
                    'Error',
                    'El administrador no se creo correctamente',
                    'error'
                );
                
                }

            },
            error: function (data) {
                var resultado = data;
                console.error(data);
                swal(
                    'Error',
                    'El administrador no se creo correctamente',
                    'error'
                );

            }
        });
    });
    
    
        $('#login-admin').on('submit', function (e) {
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) 
            {
                var resultado = data; //para convertir la cadena 
                if (resultado.respuesta == 'exitoso') 
                {
                    swal(
                        'Login Correcto',
                        'Holoooo'+resultado.usuario+'!!',
                        'success'
                        );
                    setTimeout(function(){
                        window.location.href='admin-area.php';
                    },2000);
                } else
                {
                    swal(
                    'Error',
                    'Usuario o password incorrectos',
                    'error'
                    );
                
                }

            },
            error: function (data) 
            {
                var resultado = data;
                console.error(data);
                swal(
                    'Error',
                    'Usuario o password incorrectos',
                    'error'
                    );

            }
        });
    });

});
