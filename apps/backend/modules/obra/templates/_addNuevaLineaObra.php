<li>
<tr>
    <?php echo $form['nueva_lin_obra'][$number]['ubicacion']->renderError() ?>
    <?php echo $form['nueva_lin_obra'][$number]['ubicacion']->render() ?>

    <?php echo $form['nueva_lin_obra'][$number]['provincia_list']->renderError() ?>
    <?php echo $form['nueva_lin_obra'][$number]['provincia_list']->render() ?>

    <?php echo $form['nueva_lin_obra'][$number]['municipio_id']->renderError() ?>
    <?php echo $form['nueva_lin_obra'][$number]['municipio_id']->render(array('onblur' => "setUdt(document.getElementById('obra_nueva_lin_obra_{$number}_municipio_id').value,{$number})")) ?>

    <?php echo $form['nueva_lin_obra'][$number]['udt_id']->renderError() ?>
    <?php echo $form['nueva_lin_obra'][$number]['udt_id']->render() ?>

    <?php echo $form['nueva_lin_obra'][$number]['costo_tramo']->renderError() ?>
    <?php echo $form['nueva_lin_obra'][$number]['costo_tramo']->render(array('onchange' => "actualiza()")) ?>

    <?php echo $form['nueva_lin_obra'][$number]['descripcion']->renderError() ?>
    <?php echo $form['nueva_lin_obra'][$number]['descripcion']->render() ?>

<a class="remove_lin_obra" href="#" ><?php echo image_tag('delete.png') ?></a>
</tr>
</li>