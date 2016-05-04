<?php
/* @var $this HargaSablonController */
/* @var $model HargaSablon */

$this->breadcrumbs=array(
	'Harga Sablons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HargaSablon', 'url'=>array('index')),
	array('label'=>'Create HargaSablon', 'url'=>array('create')),
	array('label'=>'View HargaSablon', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HargaSablon', 'url'=>array('admin')),
);
?>

<h1>Update HargaSablon <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>