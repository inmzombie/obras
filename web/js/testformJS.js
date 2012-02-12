$(document).ready(function(){
    /*
     *generea button para agregar fuente de financiamiento
     */
    $('.sf_admin_form_field_fuentefinanc_id').append('<div id="agregar_fuente_de_financ">Agregar<div>');
    $( "#agregar_fuente_de_financ" ).button();
    $('#agregar_fuente_de_financ').click(function(){
        $(this).hide(500);
        /**
         * genera un div al onClick i embebe un formulario
         */
        $(this).after('<div id="fuente_finac_form" ></div>');
        $('#fuente_finac_form').formation({
            //            action :"processForm",
            isAjax: true,
            method: 'POST',
            autoComplete : "off",
            name:"testForm",
            id:"fuente_financ"
        }).hide().show(500);
        $.formation.addInput({
            type:"text",
            labelValue:"Organismo:",
            required:true,
            id: "org_field"
        });
        $.formation.addTextarea({
            name:"text_organismo",
            labelValue:"Descripción",
            required:false,
            cols:"20",
            rows:"10",
            id: "org_desc"
        });
        $.formation.addInput({
            type:"text",
            labelValue:"Programa:",
            required:true,
            id: "prog_field"
        });
        $.formation.addTextarea({
            name:"text_programa",
            labelValue:"Descripción",
            required:false,
            cols:"20",
            rows:"10",
            id: "prog_desc"
        });
        $.formation.setErrorMessages({
            number:"Please enter a number."
        });
        $.formation.addButton({
            value: "Enviar",
            id: "enviar"
        });
        $.formation.addButton({
            value: "Cerrar",
            type:'reset',
            id:"cerrar"
        })

        $('#fuente_financ').submit(function(){
            org_field = $('#org_field').val();
            org_desc = $('#org_desc').val();
            prog_field = $('#prog_field').val();
            prog_desc = $('#prog_desc').val();
            new_opt = addNewFuenteFinanciamiento(org_field, org_desc, prog_field, prog_desc);
            $('#fuente_finac_form').hide(1000).remove();
            new_combo_ff = '<option value="'+new_opt.fuent_finac+'" selected="selected" >'+new_opt.fuente_finan+'</option>';
            $('#obra_fuentefinanc_id').append(new_combo_ff);
            new_combo_prog = '<option value="'+new_opt.prog_id+'" selected="selected" >'+new_opt.prog_field+'</option>';
            $('#obra_programa_id').append(new_combo_prog);
            $('#agregar_fuente_de_financ').show(500);
            return false;
        });
        $('#cerrar').click(function(){
            $('#agregar_fuente_de_financ').show(500);
            $('#fuente_finac_form').fadeIn(1000).remove();
        })

        function addNewFuenteFinanciamiento(org_field,org_desc,prog_field,prog_desc){
            $.ajax({
                type: 'post',
                url: '/backend_dev.php/obra/ProcessForm',
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