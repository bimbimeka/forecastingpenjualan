<?php

class BarangController extends ParentControllers
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	 
	public function actions() 
	{
		return array(
			'getRowForm' => array(
				'class' => 'ext.DynamicTabularForm.actions.GetRowForm',
				'view' => '_detail_form',
				'modelClass' => 'Detail'
			),
		);
	}
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$sla = new Barang();
        $sladetails = array(new DetailBarang);
 
        if (isset($_POST['Barang'])) {
            $sla->attributes = $_POST['Barang'];
 
            /**
             * creating an array of sladetail objects
             */
            if (isset($_POST['DetailBarang'])) {
                $sladetails = array();
                foreach ($_POST['DetailBarang'] as $key => $value) {
                    /*
                     * sladetail needs a scenario wherein the fk sla_id
                     * is not required because the ID can only be
                     * linked after the sla has been saved
                     */
                    $sladetail = new DetailBarang('batchSave');
                    $sladetail->attributes = $value;
                    $sladetails[] = $sladetail;
                }
            }
            /**
             * validating the sla and array of sladetail
             */
            $valid = $sla->validate();
            foreach ($sladetails as $sladetail) {
                $valid = $sladetail->validate() & $valid;
            }
 
            if ($valid) {
                $transaction = $sla->getDbConnection()->beginTransaction();
                try {
                    $sla->save();
                    $sla->refresh();
 
                    foreach ($sladetails as $sladetail) {
                        $sladetail->id_barang = $sla->id;
                        $sladetail->save();
                    }
                    $transaction->commit();
                } catch (Exception $e) {
                    $transaction->rollback();
                }
 
 
 
                $this->redirect(array('view', 'id' => $sla->id));
            }
        }
        $this->render('create', array(
            'sla' => $sla,
            'sladetails' => $sladetails
        ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$sla = $this->loadModel($id);
        $sladetails = $sla->details;
 
        if (isset($_POST['Barang'])) {
            $sla->attributes = $_POST['Barang'];
 
            if (isset($_POST['DetailBarang'])) {
                $sladetails = array();
                foreach ($_POST['Barang'] as $key => $value) {
                    /**
                     * here we will take advantage of the updateType attribute so
                     * that we will be able to determine what we want to do 
                     * to a specific row
                     */
 
                    if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_CREATE)
                        $sladetails[$key] = new DetailBarang();
 
                    else if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_UPDATE)
                        $sladetails[$key] = DetailBarang::model()->findByPk($value['id']);
 
                    else if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_DELETE) {
                        $delete = DetailBarang::model()->findByPk($value['id']);
                        if ($delete->delete()) {
                            unset($sladetails[$key]);
                            continue;
                        }
                    }
                    $sladetails[$key]->attributes = $value;
                }
            }
 
            $valid = $sla->validate();
            foreach ($sladetails as $sladetail) {
                $valid = $sladetail->validate() & $valid;
            }
 
            if ($valid) {
                $transaction = $sla->getDbConnection()->beginTransaction();
                try {
                    $sla->save();
                    $sla->refresh();
 
                    foreach ($sladetails as $sladetail) {
                        $sladetail->sla_id = $sla->id;
                        $sladetail->save();
                    }
                    $transaction->commit();
                } catch (Exception $e) {
                    $transaction->rollback();
                }
 
 
 
                $this->redirect(array('view', 'id' => $sla->id));
            }
        }
 
        $this->render('create', array(
            'sla' => $sla,
            'sladetails' => $sladetails
        ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Barang');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Barang('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Barang']))
			$model->attributes=$_GET['Barang'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Barang the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Barang::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Barang $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='barang-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
