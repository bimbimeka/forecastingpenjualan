<?php
/* @var $this HargaSablonController */
/* @var $model HargaSablon */

$this->breadcrumbs=array(
	'Harga Sablons'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HargaSablon', 'url'=>array('index')),
	array('label'=>'Create HargaSablon', 'url'=>array('create')),
	array('label'=>'Update HargaSablon', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HargaSablon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HargaSablon', 'url'=>array('admin')),
);
?>

<h1>View HargaSablon #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'nama',
		'ongkos',
		'cat',
		'listrik',
		'makan',
		'press',
		'dll',
		'c_at',
		'c_by',
		'u_at',
		'u_by',
		'status',
	),
)); ?>
