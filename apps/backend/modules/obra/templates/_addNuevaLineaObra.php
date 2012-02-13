<li>
<tr>
    <?php echo $form['LineasObras'][$number]['ubicacion']->renderError() ?>
    <?php echo $form['LineasObras'][$number]['ubicacion']->render() ?>

    <?php echo $form['LineasObras'][$number]['provincia_list']->renderError() ?>
    <?php echo $form['LineasObras'][$number]['provincia_list']->render() ?>

    <?php echo $form['LineasObras'][$number]['municipio_id']->renderError() ?>
    <?php echo $form['LineasObras'][$number]['municipio_id']->render(array('onblur' => "setUdt(document.getElementById('obra_LineasObras_{$number}_municipio_id').value,{$number})")) ?>

    <?php echo $form['LineasObras'][$number]['udt_id']->renderError() ?>
    <?php echo $form['LineasObras'][$number]['udt_id']->render() ?>

    <?php echo $form['LineasObras'][$number]['costo_tramo']->renderError() ?>
    <?php echo $form['LineasObras'][$number]['costo_tramo']->render(array('onchange' => "actualiza()")) ?>

    <?php echo $form['LineasObras'][$number]['descripcion']->renderError() ?>
    <?php echo $form['LineasObras'][$number]['descripcion']->render() ?>

<a class="remove_lin_obra" href="#" ><?php echo image_tag('delete.png') ?></a>
</tr>
</li>