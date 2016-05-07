<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParentModels
 *
 * @author rudysof
 */
class ParentModels extends CActiveRecord {
    
    public function beforeSave()
    {
        if ($this->isNewRecord) {
            $this->c_at = new CDbExpression('UTC_TIMESTAMP()');
            $this->c_by = Yii::app()->user->id;
        }else {
            $this->u_at = new CDbExpression('UTC_TIMESTAMP()');
            $this->u_at = Yii::app()->user->id;
        }
        
        return parent::beforeSave();
    }
}
