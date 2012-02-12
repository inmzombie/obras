<td class="sf_admin_text sf_admin_list_td_nombre_obra">
  <?php echo $obra->getNombreObra() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_titulo_tipo_de_obra">
  <?php echo $obra->getTituloTipoDeObra() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_titulo_estado_obra">
  <?php echo $obra->getTituloEstadoObra() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_presupuesto_oficial">
  <?php echo $obra->getPresupuestoOficial() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_monto_contrato">
  <?php echo $obra->getMontoContrato() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_inicio">
  <?php echo false !== strtotime($obra->getFechaInicio()) ? format_date($obra->getFechaInicio(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_fin">
  <?php echo false !== strtotime($obra->getFechaFin()) ? format_date($obra->getFechaFin(), "f") : '&nbsp;' ?>
</td>
