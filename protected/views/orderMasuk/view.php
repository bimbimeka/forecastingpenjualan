<?php
/* @var $this OrderMasukController */
/* @var $model OrderMasuk */

$this->breadcrumbs=array(
	'Order Masuks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrderMasuk', 'url'=>array('index')),
	array('label'=>'Create OrderMasuk', 'url'=>array('create')),
	array('label'=>'Update OrderMasuk', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrderMasuk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderMasuk', 'url'=>array('admin')),
);
?>

<h1>View OrderMasuk #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tanggal_order',
		'nama',
		'id_barang',
		'qty',
		'harga_bahan',
		'id_sablon',
		'id_jahit',
		'total_sablon',
		'total_jahit',
		'total_all',
	),
)); ?>
