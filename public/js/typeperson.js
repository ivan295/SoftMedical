$(document).ready(function() {
	//Delete tipo persona
    $('.bnt-delete').click(function(e) {
        e.preventDefault();
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');
        debugger
       // alertify.confirm("Está seguro que desea eliminar?",
        //    function() {
                $.post(url, form.serialize(), function(result) {
                    row.fadeOut();
                    debugger
                   var out = '<div class="alert alert-success alert-dismissible">';
                       out +='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                       out +='<h4><i class="icon fa fa-check"></i> Alert!</h4>';
                       out +='Eliminado correctamente';
                       out += '</div>';
                       $('#eliminado').html(out);
                }).fail(function(error) {
                	debugger
                     var out = '<div class="alert alert-success alert-dismissible">';
                       out +='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                       out +='<h4><i class="icon fa fa-check"></i> Alert!</h4>';
                       out +='Erro al Eliminar ';
                       out += '</div>';
                       $('#eliminado').html(out);
                });
            //}
       // );
    });
});