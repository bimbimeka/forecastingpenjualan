<?php
/* @var $this HargaJahitController */
/* @var $model HargaJahit */

$this->breadcrumbs=array(
	'Harga Jahits'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HargaJahit', 'url'=>array('index')),
	array('label'=>'Create HargaJahit', 'url'=>array('create')),
	array('label'=>'View HargaJahit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HargaJahit', 'url'=>array('admin')),
);
?>

<h1>Update HargaJahit <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>