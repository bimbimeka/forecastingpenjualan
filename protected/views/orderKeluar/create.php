<?php
/* @var $this OrderKeluarController */
/* @var $model OrderKeluar */

$this->breadcrumbs=array(
	'Order Keluars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderKeluar', 'url'=>array('index')),
	array('label'=>'Manage OrderKeluar', 'url'=>array('admin')),
);
?>

<h1>Create OrderKeluar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>