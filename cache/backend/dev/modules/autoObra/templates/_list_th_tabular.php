<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_nombre_obra">
  <?php if ('nombre_obra' == $sort[0]): ?>
    <?php echo link_to(__('Nombre obra', array(), 'messages'), '@obra', array('query_string' => 'sort=nombre_obra&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre obra', array(), 'messages'), '@obra', array('query_string' => 'sort=nombre_obra&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_titulo_tipo_de_obra">
  <?php echo __('Tipo de obra', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_titulo_estado_obra">
  <?php echo __('Estado de obra', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_presupuesto_oficial">
  <?php if ('presupuesto_oficial' == $sort[0]): ?>
    <?php echo link_to(__('Presupuesto oficial', array(), 'messages'), '@obra', array('query_string' => 'sort=presupuesto_oficial&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Presupuesto oficial', array(), 'messages'), '@obra', array('query_string' => 'sort=presupuesto_oficial&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_monto_contrato">
  <?php if ('monto_contrato' == $sort[0]): ?>
    <?php echo link_to(__('Monto contrato', array(), 'messages'), '@obra', array('query_string' => 'sort=monto_contrato&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Monto contrato', array(), 'messages'), '@obra', array('query_string' => 'sort=monto_contrato&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_fecha_inicio">
  <?php if ('fecha_inicio' == $sort[0]): ?>
    <?php echo link_to(__('Fecha inicio', array(), 'messages'), '@obra', array('query_string' => 'sort=fecha_inicio&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fecha inicio', array(), 'messages'), '@obra', array('query_string' => 'sort=fecha_inicio&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_fecha_fin">
  <?php if ('fecha_fin' == $sort[0]): ?>
    <?php echo link_to(__('Fecha fin', array(), 'messages'), '@obra', array('query_string' => 'sort=fecha_fin&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fecha fin', array(), 'messages'), '@obra', array('query_string' => 'sort=fecha_fin&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>