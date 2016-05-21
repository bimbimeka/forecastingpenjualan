<?php
/* @var $this HargaSablonController */
/* @var $model HargaSablon */

$this->breadcrumbs=array(
	'Harga Sablons'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#harga-sablon-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Harga Sablons</h1>


<?php echo TbHtml::linkButton('+Tambah' , array('url' => 'create', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'harga-sablon-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => TbHtml::GRID_TYPE_STRIPED,
	 'template' => "{items}",
	'columns'=>array(
		'id',
                'nama',
		'ongkos',
		'cat',
		'listrik',
		'makan',
		'press',
		/*
		'dll',
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
