<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of obraValidatorSchema
 *
 * @author mr29a
 */
class obraValidatorSchema extends sfValidatorSchema {

    protected function configure($options = array(), $messages = array()) {
        $this->addMessage('municipio_id', 'El  Municipio es requerido');
    }

    protected function doClean($values) {
//        echo var_dump($values);
//        die;
        $errorSchema = new sfValidatorErrorSchema($this);
//        foreach ($values as $key => $value) {
//            $errorSchemaLocal = new sfValidatorErrorSchema($this);
            if (!$values['municipio_id']) {
//                echo var_dump($values['municipio_id']);
//                die;
                $errorSchema->addError(new sfValidatorError($this, 'required'), 'municipio_id');
            }
//            if (count($errorSchemaLocal)) {
//                $errorSchema->addError($errorSchemaLocal, (string) $values['municipio_id']);
//            }
//        }
        if(count($errorSchema)){
            throw new sfValidatorErrorSchema($this,$errorSchema);
        }
        return $values;
    }

}
