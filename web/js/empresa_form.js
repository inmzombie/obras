$(document).ready(function(){
    /*
     *generea button para agregar Empresa
     */
    $('.sf_admin_form_field_empresa_id').append('<div id="agregar_empresa">Agregar<div>');
    $( "#agregar_empresa").button().hide();
    $("#obra_empresa_id").click(function(){
        if(!$(this).val()){
            $( "#agregar_empresa").show(500);
        }else{
            $( "#agregar_empresa").hide(500);
        }
    });
    $('#agregar_empresa').click(function(){
        $(this).hide(500);

        /**
         * genera un div al onClick i embebe un formulario
         */
        class_cont='\"sf_admin_form\"';
        id_div_cont='\"empresa_cont\"';
        th1='<th><label>Empresa</label></th>';
        td1='<td><input type="text" id="empresa_field"></td>';
        th2='<th><label>Dirección</label></th>';
        td2='<td><input type="text" id="empresa_dir"></td>';
        th3='<th><label>Teléfono fijo</label></th>';
        td3='<td><input type="text" id="empresa_tel"></td>';
        th4='<th><label>Celular</label></th>';
        td4='<td><input type="text" id="empresa_cel"></td>';
        th5='<th><label>E-mail</label></th>';
        td5='<td><input type="text" id="empresa_email"></td>';
        th6='<th><label>Descripción</label></th>';
        td6='<td><textarea rows="2" cols="20" name="descripcion" id="empresa_desc"></textarea></td>';
        td7='<td colspan="2"><input id="enviar" type="submit" value="Enviar"><div id="cerrar">Cerrar</div></td>';
        tr1='<tr>'+th1+td1+'</tr>';
        tr2='<tr>'+th2+td2+'</tr>';
        tr3='<tr>'+th3+td3+'</tr>';
        tr4='<tr>'+th4+td4+'</tr>';
        tr5='<tr>'+th5+td5+'</tr>';
        tr6='<tr>'+th6+td6+'</tr>';
        tr7='<tr>'+td7+'</tr>';
        tbody='<tbody>'+tr1+tr2+tr3+tr4+tr5+tr6+tr7+'</tbody>';
        table='<table>'+tbody+'</tabla>';
        form = '<form id="empresa_form" method="post">'+table+'</form>';
        $(this).after('<div id='+id_div_cont+' class='+class_cont+'></div>');
        $('#empresa_cont').append(form);
        $('#enviar').button();
        $('#cerrar').button();

        $('#empresa_form').submit(function(){
            empresa_field = $('#empresa_field').val();
            empresa_dir = $('#empresa_dir').val();
            empresa_tel = $('#empresa_tel').val();
            empresa_cel = $('#empresa_cel').val();
            empresa_email= $('#empresa_email').val();
            empresa_desc = $('#empresa_desc').val();
            new_opt = addNewEmpresa(empresa_field, empresa_dir, empresa_tel, empresa_cel, empresa_email, empresa_desc);
            $('#empresa_form').hide(500).remove();
            new_combo_prog = '<option value="'+new_opt.empresa_id+'" selected="selected" >'+new_opt.empresa_field+'</option>';
            $('#obra_empresa_id').append(new_combo_prog);
            return false;
        });

        $('#cerrar').click(function(){
            $('#empresa_cont').fadeIn(500).remove();
        })

        function addNewEmpresa(empresa_field, empresa_dir, empresa_tel, empresa_cel, empresa_email, empresa_desc){
            $.ajax({
                type: 'post',
                url: '/backend_dev.php/obra/ProcessEmpresaForm',
                data:{
                    empresa_field: empresa_field,
                    empresa_dir: empresa_dir,
                    empresa_tel: empresa_tel,
                    empresa_cel: empresa_cel,
                    empresa_email: empresa_email,
                    empresa_desc: empresa_desc
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



