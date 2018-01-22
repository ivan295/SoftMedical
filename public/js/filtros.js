$(document).ready(function() {
    $('#tipo').on('input', function(e) {
        e.preventDefault();
        var tipo = $('#tipo').val();
        var url = $(this).data('url') + '/' + tipo;
        $.ajax({
            url: url,
            type: "get",
            dataType: "json"
        }).done(function(data, textStatus, jqXHR) {
            $('#tablaTipo tbody tr').slice(1).remove();
            var output = "";
            var count = 0;
            $.each(data, function(key, value) {
                count += 1;
                output += "<tr clas='text-center'>";
                output += "<td class='text-center'>" + count + "</td>";
                output += "<td class='text-center'>" + value['tipo'] + "</td>";
                output += '<td class="text-center">';
                output += '<div class="row">';
                output += '<div class="col-md-6 text-right">';
                output += '<a href="' + value['id'] + '" class="btn btn-warning btn-xs">Editar</a>';
                output += '</div>';
                output += '<div class="col-md-6 text-left">';
                output += '<form action="' + value['id'] + '" method="post">';
                output += '<input type="hidden" name="_method" value="DELETE">';
                output += '<input type="hidden" name="_token" value="{{ csrf_token() }}">';
                output += '<button type="submit" class="btn btn-danger btn-xs">Borrar</button>';
                output += '</form>';
                output += '</div>';
                output += '</div>';
                output += '</td>';
                output += '</tr>';
            });
            $('#tablaTipo tbody tr:last').after(output);
            $('.pagination').hide();
        }).fail(function(jqXHR, textStatus) {
            // alertify.error('Error al actualizar');
        });

        if ($("#tipo").val().length < 1) {
            var url = '/admin/tipoPersona/create';
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json"
            }).done(function(data, textStatus, jqXHR) {
                $('#tablaTipo tbody tr').slice(1).remove();
                var output = "";
                var count = 0;
                $.each(data.data, function(key, value) {
                    count += 1;
                    output += "<tr clas='text-center'>";
                    output += "<td class='text-center'>" + count + "</td>";
                    output += "<td class='text-center'>" + value['tipo'] + "</td>";
                    output += '<td class="text-center">';
                    output += '<div class="row">';
                    output += '<div class="col-md-6 text-right">';
                    output += '<a href="' + value['id'] + '" class="btn btn-warning btn-xs">Editar</a>';
                    output += '</div>';
                    output += '<div class="col-md-6 text-left">';
                    output += '<form action="' + value['id'] + '" method="post">';
                    output += '<input type="hidden" name="_method" value="DELETE">';
                    output += '<input type="hidden" name="_token" value="{{ csrf_token() }}">';
                    output += '<button type="submit" class="btn btn-danger btn-xs">Borrar</button>';
                    output += '</form>';
                    output += '</div>';
                    output += '</div>';
                    output += '</td>';
                    output += '</tr>';
                });
                $('#tablaTipo tbody tr:last').after(output);
                 $('.pagination').show();
            }).fail(function(jqXHR, textStatus) {
                // alertify.error('Error al actualizar');
            });
        }
    });
});