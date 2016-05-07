<?php
/* @var $this OrderKeluarController */
/* @var $model OrderKeluar */

$this->breadcrumbs=array(
	'Order Keluars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrderKeluar', 'url'=>array('index')),
	array('label'=>'Create OrderKeluar', 'url'=>array('create')),
	array('label'=>'Update OrderKeluar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrderKeluar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderKeluar', 'url'=>array('admin')),
);
?>

<h1>View OrderKeluar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tanggal_order',
		'id_order_masuk',
		'qty_awal',
		'qty_akhir',
		'c_at',
		'u_at',
		'c_by',
		'u_by',
	),
)); ?>
