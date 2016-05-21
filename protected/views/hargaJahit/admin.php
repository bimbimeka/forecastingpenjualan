<?php
/* @var $this HargaJahitController */
/* @var $model HargaJahit */

$this->breadcrumbs=array(
	'Harga Jahit'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#harga-jahit-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Harga Jahit</h1>


<?php echo TbHtml::linkButton('+Tambah' , array('url' => 'create', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'harga-jahit-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => TbHtml::GRID_TYPE_STRIPED,
	 'template' => "{items}",
	'columns'=>array(
		'id',
		'ongkos',
		'potong',
		'steam',
		'plastik',
		'gas',
		
		'listrik',
		'makan',
		'benang',
		/*
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
