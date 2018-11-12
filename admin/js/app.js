 $(document).ready(function () {
    $('.sidebar-menu').tree()
    
    $('#registros').DataTable({
      'paging'      : true,
      'pageLength'  : 10, 
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'language'    : {
          paginate: {
              next: 'Siguiente',
              previous: 'Anterior',
              last: 'Ultimo',
              first: 'Primero'
          },
          info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
          emptyTable: 'No hay registros',
          infoEmpty: '0 Registros',
          search: 'Buscar'
      }
  });

 });

$('#crear-registro_admin').attr('disabled',true); 

$('#repetir_password').on('input',function(){
    var password_nuevo= $('#password').val();
    if($(this).val() == password_nuevo){
        $('#resultado_password').text('correcto');
        $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('#crear-registro_admin').attr('disabled',false); 
    }else
    {
        $('#resultado_password').text('incorrecto');
        $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
        $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
    }
});