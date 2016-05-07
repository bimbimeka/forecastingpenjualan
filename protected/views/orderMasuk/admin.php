<?php
/* @var $this OrderMasukController */
/* @var $model OrderMasuk */

$this->breadcrumbs=array(
	'Order Masuks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrderMasuk', 'url'=>array('index')),
	array('label'=>'Create OrderMasuk', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#order-masuk-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Order Masuks</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'order-masuk-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tanggal_order',
		'nama',
		'id_barang',
		'qty',
		'harga_bahan',
		/*
		'id_sablon',
		'id_jahit',
		'total_sablon',
		'total_jahit',
		'total_all',
		'c_at',
		'u_at',
		'c_by',
		'u_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
