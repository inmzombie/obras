<?php
// auto-generated by sfViewConfigHandler
// date: 2012/02/11 14:08:12
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('../js/jquery-ui-1.8.16.custom/css/custom-theme/jquery-ui-1.8.16.custom.css', '', array ());
  $response->addStylesheet('menu.css', '', array ());
  $response->addJavascript('jquery-1.7.min.js', '', array ());
  $response->addJavascript('/js/jquery-ui-1.8.16.custom/js/jquery-ui-1.8.16.custom.min.js', '', array ());
  $response->addJavascript('double_list.js', '', array ());

