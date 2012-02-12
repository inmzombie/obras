<?php use_helper('I18N', 'Date') ?>
<?php include_partial('obra/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva Obra', array(), 'messages') ?></h1>

  <?php include_partial('obra/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('obra/form_header', array('obra' => $obra, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('obra/form', array('obra' => $obra, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('obra/form_footer', array('obra' => $obra, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
