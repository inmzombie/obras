$(document).ready(function(){
    /*
     *generea button para agregar programa
     */
    $('.sf_admin_form_field_programa_id').append('<div id="agregar_programa">Agregar<div>');
    $( "#agregar_programa").button().hide();
    $("#obra_programa_id").click(function(){
        if(!$(this).val()){
            $( "#agregar_programa").show(500);
        }else{
            $( "#agregar_programa").hide(500);
        }
    });
    $('#agregar_programa').click(function(){
        $(this).hide(500);

        /**
         * genera un div al onClick i embebe un formulario
         */
        class_cont='\"sf_admin_form\"';
        id_div_cont='\"programa_cont\"';
        th1='<th><label>Programa</label></th>';
        td1='<td><input type="text" id="prog_field"></td>';
        th2='<th><label>Descripción</label></th>';
        td2='<td><textarea rows="2" cols="20" name="descripcion" id="prog_desc"></textarea></td>';
        td3='<td colspan="2"><input id="enviar" type="submit" value="Enviar"><div id="cerrar">Cerrar</div></td>';
        tr1='<tr>'+th1+td1+'</tr>';
        tr2='<tr>'+th2+td2+'</tr>';
        tr3='<tr>'+td3+'</tr>';
        tbody='<tbody>'+tr1+tr2+tr3+'</tbody>';
        table='<table>'+tbody+'</tabla>';
        form = '<form id="programa_form" method="post">'+table+'</form>';
        $(this).after('<div id='+id_div_cont+' class='+class_cont+'></div>');
        $('#programa_cont').append(form);
        $('#enviar').button();
        $('#cerrar').button();

        $('#programa_form').submit(function(){
            prog_field = $('#prog_field').val();
            prog_desc = $('#prog_desc').val();
            id_fuente_financ = $("#obra_fuentefinanc_id").val();
            new_opt = addNewPrograma(prog_field, prog_desc,id_fuente_financ);
            $('#programa_form').hide(500).remove();
            new_combo_prog = '<option value="'+new_opt.prog_id+'" selected="selected" >'+new_opt.prog_field+'</option>';
            $('#obra_programa_id').append(new_combo_prog);
            return false;
        });

        $('#cerrar').click(function(){
            $('#programa_cont').fadeIn(500).remove();
        })
        function addNewPrograma(prog_field,prog_desc,id_fuente_financ){
            $.ajax({
                type: 'post',
                url: '/backend_dev.php/obra/ProcessProgramaForm',
                data:{
                    prog_field: prog_field,
                    prog_desc: prog_desc,
                    id_ff: id_fuente_financ
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

