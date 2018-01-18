$(document).ready(function() {
debugger
	$('#tipo').on('input',function(e){
    	var tipo =$('#tipo').val();
        var url = $(this).data('url');;
        debugger
    	$.ajax({
            url: url,
            type: "post",
            dataType: "json",
            data: {'tipo':tipo}
        }).done(function(data, textStatus, jqXHR) {
           debugger
           
        }).fail(function(jqXHR, textStatus) {
        	debugger
            alertify.error('Error al actualizar');
        });


	});
	
});