function actualiza(){
    i=1;
    costo_lin=0;
    $('ul#lineas_obras li input').each(function(){
        id = (this.id).split('_');
        id_lin = id[4];
        if(id[5]=='costo'){
            costo = $('#'+this.id).val();
            costo_lin = parseFloat(costo_lin) + parseFloat(costo);
                
        }
    });
    document.getElementById('obra_monto_contrato').value=costo_lin.toFixed(2);
}


