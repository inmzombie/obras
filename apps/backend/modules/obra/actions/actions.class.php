<?php

require_once dirname(__FILE__) . '/../lib/obraGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/obraGeneratorHelper.class.php';

/**
 * obra actions.
 *
 * @package    obras
 * @subpackage obra
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class obraActions extends autoObraActions {

    public function executeBuscarEstadoDeObra(sfWebRequest $request) {
        $this->getResponse()->setContentType('application/json');

        $estados_obras = Doctrine::getTable('EstadoDeObra')
                        ->retrieveForSelectEstadoDeObra(
                                $request->getParameter('q'),
                                $request->getParameter('limit')
        );
//        $test = array(1 => $request->getParameter('test'));

        return $this->renderText(json_encode($estados_obras));
    }

    /**
     * Action que Agrega linea en el formulario obras
     *
     * @param sfWebRequest $request //num: numero de linea
     */
    public function executeAddLineaObra(sfWebRequest $request) {
        $this->forward404unless($request->isXmlHttpRequest());
        $number = intval($request->getParameter("num"));
        $this->form = new ObraForm();
        $this->form->addNewFields($number);
        return $this->renderPartial('addNuevaLineaObra', array('form' => $this->form, 'number' => $number));
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = $this->configuration->getForm();
        $this->obra = $this->form->getObject();
        $this->form->addNewFields(0);
    }

    public function executeEdit(sfWebRequest $request) {
        $this->obra = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->obra);
//        echo var_dump($request->getParameter('obra'));
//        die;
    }

    /**
     * Autocompletar del municipio en el formulario de Obras autocompleta cada línea de obra
     * @param sfWebRequest $request //solucitud AJAX
     */
    public function executeAutocompleterMunicipio(sfWebRequest $request) {
        $this->getResponse()->setContentType('application/json');

        $municipios = Doctrine::getTable('Municipio')->retrieveForSelectMunicipio(
                        $request->getParameter('q'),
                        $request->getParameter('limit'),
                        $request->getParameter('id_prov')
        );

        return $this->renderText(json_encode($municipios));
    }

    public function executeProcessFuenteFinanciamientoForm(sfWebRequest $request) {
        $fuent_financ = new FuenteFinanciamiento();
        $fuent_financ->setOganismo($request->getParameter('org_field'));
        $fuent_financ->setDescripcion($request->getParameter('org_desc'));
        $fuent_financ->save();
        $programa = new Programa();
        $programa->setPrograma($request->getParameter('prog_field'));
        $programa->setDescripcion($request->getParameter('prog_desc'));
        $programa->setFuenteFinancId($fuent_financ->getId());
        $programa->save();
        $response = array('prog_id' => $programa->getId(), 'prog_field' => $programa->getPrograma(), 'fuent_finac' => $fuent_financ->getId(), 'fuente_finan' => $fuent_financ->getOganismo());
        return $this->renderText(json_encode($response));
    }

    public function executeProcessProgramaForm(sfWebRequest $request) {
        $programa = new Programa();
        $programa->setPrograma($request->getParameter('prog_field'));
        $programa->setDescripcion($request->getParameter('prog_desc'));
        $programa->setFuenteFinancId($request->getParameter('id_ff'));
        $programa->save();
        $response = array('prog_id' => $programa->getId(), 'prog_field' => $programa->getPrograma());
        return $this->renderText(json_encode($response));
    }

    public function executeProcessTipoObraForm(sfWebRequest $request) {
        $tipodeobra = new TipoDeObra();
        $tipodeobra->setTipoDeObra($request->getParameter('tipo_obra_field'));
        $tipodeobra->setDescripcion($request->getParameter('tipo_obra_desc'));
        $tipodeobra->save();
        $response = array('to_id' => $tipodeobra->getId(), 'to_field' => $tipodeobra->getTipoDeObra());
        return $this->renderText(json_encode($response));
    }

    public function executeProcessEmpresaForm(sfWebRequest $request) {
        $empresa = new Empresa();
        $empresa->setEmpresa($request->getParameter('empresa_field'));
        $empresa->setDireccion($request->getParameter('empresa_dir'));
        $empresa->setTelefono($request->getParameter('empresa_tel'));
        $empresa->setEmail($request->getParameter('empresa_email'));
        $empresa->setTelCel($request->getParameter('empresa_cel'));
        $empresa->setDescripcion($request->getParameter('empresa_desc'));
        $empresa->save();
        $response = array('empresa_id' => $empresa->getId(), 'empresa_field' => $empresa->getEmpresa());
        return $this->renderText(json_encode($response));
    }

    public function executeOrganismoForm(sfWebRequest $request) {
        $organismo = new Organismo();
        $organismo->setOrganismo($request->getParameter('org_field'));
        $organismo->setDescripcion($request->getParameter('org_desc'));
        $organismo->save();
        $response = array('org_id' => $organismo->getId(), 'org_field' => $organismo->getOrganismo());
        return $this->renderText(json_encode($response));
    }

    public function executeActualiza(sfWebRequest $request) {

    }

    public function executeSetUdt(sfWebRequest $request) {
        $udt_id = Doctrine::getTable('Municipio')->retrieveUdtForSelectMunicipio(
                        $request->getParameter('municipio_id')
        );
        if ($udt_id) {
            $response = array('udt_id' => $udt_id->getUdtId());
        }else {
            $response = array('udt_id'=>'');
        }
        return $this->renderText(json_encode($response));
    }

}

