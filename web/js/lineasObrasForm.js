/**
 *Variable global
 */
newfieldscount = 0;

/**
 *Remueve la linea
 */
var removeNew = function(){
    $('.remove_lin_obra').click(function(e){
        e.preventDefault();
        $(this).parent().remove();
        actualiza();
    })
};

/* 
 *Javascript Solicitud agregar linea
 */
function addNewField(num){
    return $.ajax({
        type: 'GET',
        url: '/backend_dev.php/addlineaobra?num='+num,
        async: false
    }).responseText;
}

$(document).ready(function(){
    $('#addnewline').click(function(e){
        e.preventDefault();
        $('ul#lineas_obras').append(addNewField(newfieldscount));
        newfieldscount = newfieldscount + 1;
        $('.remove_lin_obra').unbind('click');
        removeNew();
    });
});


