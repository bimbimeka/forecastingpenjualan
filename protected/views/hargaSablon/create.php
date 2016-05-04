<?php
/* @var $this HargaSablonController */
/* @var $model HargaSablon */

$this->breadcrumbs=array(
	'Harga Sablons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HargaSablon', 'url'=>array('index')),
	array('label'=>'Manage HargaSablon', 'url'=>array('admin')),
);
?>

<h1>Create HargaSablon</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>