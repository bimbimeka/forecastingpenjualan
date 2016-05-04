<?php
/* @var $this OrderKeluarController */
/* @var $model OrderKeluar */

$this->breadcrumbs=array(
	'Order Keluars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderKeluar', 'url'=>array('index')),
	array('label'=>'Create OrderKeluar', 'url'=>array('create')),
	array('label'=>'View OrderKeluar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrderKeluar', 'url'=>array('admin')),
);
?>

<h1>Update OrderKeluar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>