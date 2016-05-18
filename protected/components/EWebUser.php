<?php
class EWebUser extends CWebUser{
    protected $_model;
    
    public function getIsAdmin(){
        return Yii::app()->user->role == UserLevel::ADMIN;
    }
	
    public function getIsKeyuser(){
        return Yii::app()->user->role == UserLevel::KEYUSER;
    }
	
    public function getIsEnduser(){
        return Yii::app()->user->role == UserLevel::ENDUSER;
    }
    
	protected function loadUser(){
        if ($this->_model === null){
            $this->_model = user::model()->findByPk($this->id);
        }
        return $this->_model;
    }
	
    public function getRole(){
        return $this->getState('_level');
    }
}
?>