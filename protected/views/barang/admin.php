<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barang'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Barang', 'url'=>array('index')),
	array('label'=>'Create Barang', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#barang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Barang</h1>

<?php echo TbHtml::linkButton('+Tambah' , array('url' => 'create', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'barang-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => TbHtml::GRID_TYPE_STRIPED,
	 'template' => "{items}",
	'columns'=>array(
		'id',
		'barcode',
		'jenis',
		'artikel',
		'size',
		'stock_awal',
		/*
		'bm',
		'bk',
		'stock_akhir',
		'c_at',
		'c_by',
		'u_at',
		'u_by',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
