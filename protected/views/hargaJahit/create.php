<?php
/* @var $this HargaJahitController */
/* @var $model HargaJahit */

$this->breadcrumbs=array(
	'Harga Jahits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HargaJahit', 'url'=>array('index')),
	array('label'=>'Manage HargaJahit', 'url'=>array('admin')),
);
?>

<h1>Create HargaJahit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>