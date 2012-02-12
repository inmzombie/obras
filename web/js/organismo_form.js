$(document).ready(function(){
    /*
     *generea button para agregar Organismo
     */
    $('.sf_admin_form_field_org_id').append('<div id="agregar_organismo">Agregar<div>');
    $("#agregar_organismo").button().hide();
    $("#obra_org_id").change(function(){
        if(!$(this).val()){
            $("#agregar_organismo").show(500);
        }else{
            $("#agregar_organismo").hide(500);
        }
    });
    $('#agregar_organismo').click(function(){
        $(this).hide(500);

        /**
         * genera un div al onClick i embebe un formulario
         */
        class_cont='\"sf_admin_form\"';
        id_div_cont='\"organismo_cont\"';
        th1='<th><label>Organismo</label></th>';
        td1='<td><input type="text" id="organismo_field"></td>';
        th2='<th><label>Descripción</label></th>';
        td2='<td><textarea rows="2" cols="20" name="descripcion" id="organismo_desc"></textarea></td>';
        td3='<td colspan="2"><input id="enviar" type="submit" value="Enviar"><div id="cerrar">Cerrar</div></td>';
        tr1='<tr>'+th1+td1+'</tr>';
        tr2='<tr>'+th2+td2+'</tr>';
        tr3='<tr>'+td3+'</tr>';
        tbody='<tbody>'+tr1+tr2+tr3+'</tbody>';
        table='<table>'+tbody+'</tabla>';
        form = '<form id="organismo_form" method="post">'+table+'</form>';
        $(this).after('<div id='+id_div_cont+' class='+class_cont+'></div>');
        $('#organismo_cont').append(form);
        $('#enviar').button();
        $('#cerrar').button();

        $('#organismo_form').submit(function(){
            organismo_field = $('#organismo_field').val();
            organismo_desc = $('#organismo_desc').val();
            new_opt = addNewOrganismo(organismo_field, organismo_desc);
            $('#organismo_form').hide(500).remove();
            new_combo_org = '<option value="'+new_opt.org_id+'" selected="selected" >'+new_opt.org_field+'</option>';
            $('#obra_org_id').append(new_combo_org);
            return false;
        });

        $('#cerrar').click(function(){
            $('#organismo_cont').fadeIn(500).remove();
        })
        function addNewOrganismo(org_field,org_desc){
            $.ajax({
                type: 'post',
                url: '/backend_dev.php/obra/OrganismoForm',
                data:{
                    org_field: org_field,
                    org_desc: org_desc
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