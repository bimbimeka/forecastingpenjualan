<?php
/* @var $this OrderMasukController */
/* @var $model OrderMasuk */

$this->breadcrumbs=array(
	'Order Masuks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderMasuk', 'url'=>array('index')),
	array('label'=>'Create OrderMasuk', 'url'=>array('create')),
	array('label'=>'View OrderMasuk', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrderMasuk', 'url'=>array('admin')),
);
?>

<h1>Update OrderMasuk <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>