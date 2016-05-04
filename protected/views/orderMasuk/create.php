<?php
/* @var $this OrderMasukController */
/* @var $model OrderMasuk */

$this->breadcrumbs=array(
	'Order Masuks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderMasuk', 'url'=>array('index')),
	array('label'=>'Manage OrderMasuk', 'url'=>array('admin')),
);
?>

<h1>Create OrderMasuk</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>