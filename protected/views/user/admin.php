<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'User'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User</h1>



<?php echo TbHtml::linkButton('+Tambah' , array('url' => 'create', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => TbHtml::GRID_TYPE_STRIPED,
	 'template' => "{items}",
	'columns'=>array(
		'id',
		'user_id',
		'username',
		'nama',
		'level',
		'password',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
