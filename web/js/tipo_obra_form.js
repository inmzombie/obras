    $(document).ready(function(){
    /*
     *generea button para agregar tipo de obra
     */
    $('.sf_admin_form_field_tipo_obra_id').append('<div id="agregar_tipo_obra">Agregar<div>');
    $("#agregar_tipo_obra").button().hide();
    $("#obra_tipo_obra_id").click(function(){
        if(!$(this).val()){
            $( "#agregar_tipo_obra").show(500);
        }else{
            $( "#agregar_tipo_obra").hide(500);
        }
    });
//    alert($(this).val());
    $('#agregar_tipo_obra').click(function(){
        $(this).hide(500);

        /**
         * genera un div al onClick i embebe un formulario
         */
        class_cont='\"sf_admin_form\"';
        id_div_cont='\"tipo_obra_cont\"';
        th1='<th><label>Tipo de Obra</label></th>';
        td1='<td><input type="text" id="tipo_obra_field"></td>';
        th2='<th><label>Descripción</label></th>';
        td2='<td><textarea rows="2" cols="20" name="descripcion" id="tipo_obra_desc"></textarea></td>';
        td3='<td colspan="2"><input id="enviar" type="submit" value="Enviar"><div id="cerrar">Cerrar</div></td>';
        tr1='<tr>'+th1+td1+'</tr>';
        tr2='<tr>'+th2+td2+'</tr>';
        tr3='<tr>'+td3+'</tr>';
        tbody='<tbody>'+tr1+tr2+tr3+'</tbody>';
        table='<table>'+tbody+'</tabla>';
        form = '<form id="tipo_obra_form" method="post">'+table+'</form>';
        $(this).after('<div id='+id_div_cont+' class='+class_cont+'></div>');
        $('#tipo_obra_cont').append(form);
        $('#enviar').button();
        $('#cerrar').button();

        $('#tipo_obra_form').submit(function(){
            tipo_obra_field = $('#tipo_obra_field').val();
            tipo_obra_desc = $('#tipo_obra_desc').val();
            new_opt = addNewPrograma(tipo_obra_field, tipo_obra_desc);
            $('#tipo_obra_form').hide(500).remove();
            new_combo_prog = '<option value="'+new_opt.to_id+'" selected="selected" >'+new_opt.to_field+'</option>';
            $('#obra_tipo_obra_id').append(new_combo_prog);
            return false;
        });

        $('#cerrar').click(function(){
            $('#tipo_obra_cont').fadeIn(500).remove();
        })
        function addNewPrograma(tipo_obra_field,tipo_obra_desc){
            $.ajax({
                type: 'post',
                url: '/backend_dev.php/obra/ProcessTipoObraForm',
                data:{
                    tipo_obra_field: tipo_obra_field,
                    tipo_obra_desc: tipo_obra_desc
                },
                async: false,
                dataType:'json',
                success: function(datos, textStatus) {
                    respuesta=datos;
                }
            });
            return respuesta;
        };
    });


})


