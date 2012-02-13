function setUdt(municipio_id,num_lin){
    $.ajax({
        type: 'post',
        url: '/backend_dev.php/setudt',
        data:{
            municipio_id: municipio_id
        },
        async: false,
        dataType:'json',
        success: function(datos, textStatus) {
            $('#obra_LineasObras_'+num_lin+'_udt_id option[value='+ datos.udt_id+']').attr('selected', 'selected');
            alert('#obra_LineasObras_'+num_lin+'_udt_id option[value='+ datos.udt_id+']');
        }
    });
}
