<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
    <div class="sf_admin_form content_form">
        <?php echo form_tag_for($form, '@obra', array('id' => 'obra_form')) ?>
        <?php echo $form->renderHiddenFields(false) ?>
        <h1>HOLa</h1>
        <?php if ($form->hasGlobalErrors()): ?>
        <?php echo $form->renderGlobalErrors() ?>
        <?php endif; ?>
            <div id="tabs_obras">
                <ul>
                    <li><a href="#datos_de_obra">Datos de obra: </a></li>
                    <li><a href="#financiamiento">Financiamiento: </a></li>
                    <li><a href="#datos_de_contratado">Datos de Contratado: </a></li>
                    <li><a href="#datos_responsable">Datos responsable: </a></li>
                    <li><a href="#plazos">Plazos: </a></li>
                    <!--                <li><a href="#lineas">Lugar/es: </a></li>-->
                </ul>
            <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
                <div id="<?php echo preg_replace('/[^a-z0-9_]/', '_', strtolower($fieldset)) ?>">
                <?php include_partial('obra/form_fieldset', array('obra' => $obra, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
            </div>
            <?php endforeach; ?>

                <div class="lineas_content">
                    <fieldset id="sf_fieldset_lineas">
                        <h2>Agregar ubicación o lugar de referencia:</h2>
                        Ubicación&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provincia &nbsp; Municipio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; UDT&nbsp;&nbsp;Costo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descripción
                    <?php if ($form->getObject()->isNew()): ?>
                        <script type="text/javascript">newfieldscount = 1;</script>
                        <ul id="lineas_obras" class="lista_linea">
                            <li>
                            <tr>
                            <?php echo $form['nueva_lin_obra'][0]['ubicacion']->renderError() ?>
                            <?php echo $form['nueva_lin_obra'][0]['ubicacion']->render() ?>

                            <?php echo $form['nueva_lin_obra'][0]['provincia_list']->renderError() ?>
                            <?php echo $form['nueva_lin_obra'][0]['provincia_list']->render() ?>

                            <?php echo $form['nueva_lin_obra'][0]['municipio_id']->renderError() ?>
                            <?php echo $form['nueva_lin_obra'][0]['municipio_id']->render(array('onblur' => "setUdt(document.getElementById('obra_nueva_lin_obra_0_municipio_id').value,0)")) ?>

                            <?php echo $form['nueva_lin_obra'][0]['udt_id']->renderError() ?>
                            <?php echo $form['nueva_lin_obra'][0]['udt_id']->render() ?>

                            <?php echo $form['nueva_lin_obra'][0]['costo_tramo']->renderError() ?>
                            <?php echo $form['nueva_lin_obra'][0]['costo_tramo']->render(array('onchange' => "actualiza()")) ?>

                            <?php echo $form['nueva_lin_obra'][0]['descripcion']->renderError() ?>
                            <?php echo $form['nueva_lin_obra'][0]['descripcion']->render() ?>

                        <a id="addnewline" href="#"><?php echo image_tag('new.png') ?></a>
                        </tr>
                        </li>
                    </ul>
                    <?php else: ?>
                                <ul id="lineas_obras" class="lista_linea">

                        <?php foreach ($form['LineasObras'] as $key => $linea_obra): ?>
                                    <li>
                                    <tr>
                            <?php echo $linea_obra['ubicacion']->renderError() ?>
                            <?php echo $linea_obra['ubicacion']->render() ?>

                            <?php echo $linea_obra['provincia_list']->renderError() ?>
                            <?php echo $linea_obra['provincia_list']->render() ?>

                            <?php echo $linea_obra['municipio_id']->renderError() ?>
                            <?php echo $linea_obra['municipio_id']->render(array('onchange' => "setUdt(document.getElementById('obra_nueva_lin_obra_{$key}_municipio_id').value,{$key})")) ?>


                            <?php echo $linea_obra['udt_id']->renderError() ?>
                            <?php echo $linea_obra['udt_id']->render() ?>

                            <?php echo $linea_obra['costo_tramo']->renderError() ?>
                            <?php echo $linea_obra['costo_tramo']->render(array('onchange' => "actualiza()")) ?>

                            <?php echo $linea_obra['descripcion']->renderError() ?>
                            <?php echo $linea_obra['descripcion']->render() ?>

                                <a id="addnewline" href="#"><?php echo image_tag('new.png') ?></a>
                                </tr>

                                </li>
                        <?php endforeach; ?>
                                </ul>
                    <?php endif; ?>

                                </fieldset>
                            </div>
                        </div>
        <?php include_partial('obra/form_actions', array('obra' => $obra, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
        </form>
    </div>
<script type="text/javascript">
    //    $('#obra_form').validate({
    //        rules: {
    //            validBeforeDatepicker: {
    //                dpCompareDate: ['before', '#obra_fecha_inicio_jquery_control']
    //            },
    //            validAfterDatepicker: {
    //                dpCompareDate: {after: '#obra_fecha_fin_jquery_control'}
    //            },
    //            startDate: {
    //                dpDate: true
    //            }
    //        }
    //    });
</script>
