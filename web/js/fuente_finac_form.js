$(document).ready(function(){
    /*
     *generea button para agregar fuente de financiamiento
     */
    $('.sf_admin_form_field_fuentefinanc_id').append('<div id="agregar_fuente_de_financ">Agregar<div>');
    $( "#agregar_fuente_de_financ" ).button().hide();
    $('#obra_fuentefinanc_id').click(function(){
        if(!$(this).val()){
            $( "#agregar_fuente_de_financ").show(500);
        }else{
            $( "#agregar_fuente_de_financ").hide(500);
        }
    });
    $('#agregar_fuente_de_financ').click(function(){
        $(this).hide(500);
        /**
         * genera un div al onClick i embebe un formulario
         */
        class_cont='\"sf_admin_form\"';
        id_div_cont='\"fuente_financ_cont\"';
        label='<label></label>';
        th='<th></th>';
        td='<td></td>';
        tr='<tr></tr>';
        th1='<th><label>Organismo</label></th>';
        td1='<td><input type="text" id="org_field"></td>';
        th2='<th><label>Descripción</label></th>';
        td2='<td><textarea rows="2" cols="20" name="descripcion" id="org_desc"></textarea></td>';
        th3='<th><label>Programa</label></th>';
        td3='<td><input type="text" id="prog_field"></td>';
        th4='<th><label>Descripción</label></th>';
        td4='<td><textarea rows="2" cols="20" name="descripcion" id="prog_desc"></textarea></td>';
        td5='<td colspan="2"><input id="enviar" type="submit" value="Enviar"><div id="cerrar">Cerrar</div></td>';
        tr1='<tr>'+th1+td1+'</tr>';
        tr2='<tr>'+th2+td2+'</tr>';
        tr3='<tr>'+th3+td3+'</tr>';
        tr4='<tr>'+th4+td4+'</tr>';
        tr5='<tr>'+td5+'</tr>';
        tbody='<tbody>'+tr1+tr2+tr3+tr4+tr5+'</tbody>';
        table='<table>'+tbody+'</tabla>';
        form = '<form id="fuente_financ_form" method="post">'+table+'</form>';
        $(this).after('<div id='+id_div_cont+' class='+class_cont+'></div>');
        $('#fuente_financ_cont').append(form);
        $('#enviar').button();
        $('#cerrar').button();

        $('#fuente_financ_form').submit(function(){
            org_field = $('#org_field').val();
            org_desc = $('#org_desc').val();
            prog_field = $('#prog_field').val();
            prog_desc = $('#prog_desc').val();
            new_opt = addNewFuenteFinanciamiento(org_field, org_desc, prog_field, prog_desc);
            $('#fuente_financ_form').hide(1000).remove();
            new_combo_prog = '<option value="'+new_opt.prog_id+'" selected="selected" >'+new_opt.prog_field+'</option>';
            new_combo_ff= '<option value="'+new_opt.fuent_finac+'" selected="selected" >'+new_opt.fuente_finan+'</option>';
            $('#obra_fuentefinanc_id').append(new_combo_ff);
            $('#obra_programa_id').append(new_combo_prog);
            $('#agregar_fuente_de_financ').show(500);
            return false;
        });

        $('#cerrar').click(function(){
            $('#agregar_fuente_de_financ').show(500);
            $('#fuente_financ_cont').fadeIn(500).remove();
        })
        function addNewFuenteFinanciamiento(org_field,org_desc,prog_field,prog_desc){
            $.ajax({
                type: 'post',
                url: '/backend_dev.php/obra/ProcessFuenteFinanciamientoForm',
                data:{
                    org_field: org_field,
                    org_desc: org_desc,
                    prog_field: prog_field,
                    prog_desc: prog_desc
                },
                async: false,
                dataType:'json',
                success: function(datos, textStatus) {
                    respuesta=datos;
                }
            });
            return respuesta;
        };

        function close(){
            $('#demo').remove();
        }

    });

})



