$(document).ready(function() {
    $('.btn-delete').click(function (e) {
        e.preventDefault();

        /*obtener el padre del elemento en el que estamos*/
        var row = $(this).parents('tr');

        var id = row.data('id');

        //alert(id);

        /*Los datos necesarios*/
        var form = $('#form-delete');

        var url = form.attr('action').replace(':USER_ID', id);

        var data = form.serialize();

        //alert(data);

        /*Enviar al controlador para que sea procesado*/
        bootbox.confirm(message, function (res) {
            /*Si le dimos ok a nuestra ventana de confirmación, es donde se va
             a ejecutar el envío de nuestros datos hacia el controlador*/
            if(res == true)
            {
                $('#delete-progress').removeClass('hidden');
                $.post(url, data, function(result) {
                    $('#delete-progress').addClass('hidden');
                    if(result.removed == 1)
                    {
                        row.fadeOut();
                        $('#message').removeClass('hidden');

                        $('#user-message').text(result.message);

                        var totalUsers = $('#total').text();

                        if($.isNumeric(totalUsers))
                        {
                            $('#total').text(totalUsers -1);
                        }
                        else {
                            $('#total').text(result.countUsers);
                        }
                    }
                    else
                    {
                        $('#message-danger').removeClass('hidden');

                        $('#user-message-danger').text(result.message);
                    }
                }).fail(function() {
                    alert('ERROR');
                    row.show();
            });
            }
        });
    });
});