<?php
/* @var $this HargaJahitController */
/* @var $model HargaJahit */

$this->breadcrumbs=array(
	'Harga Jahits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HargaJahit', 'url'=>array('index')),
	array('label'=>'Create HargaJahit', 'url'=>array('create')),
	array('label'=>'Update HargaJahit', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HargaJahit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HargaJahit', 'url'=>array('admin')),
);
?>

<h1>View HargaJahit #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ongkos',
		'potong',
		'steam',
		'plastik',
		'gas',
		'listrik',
		'makan',
		'benang',
		'c_at',
		'c_by',
		'u_at',
		'u_by',
		'status',
	),
)); ?>
