<?php
/* @var $this OrderKeluarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Order Keluars',
);

$this->menu=array(
	array('label'=>'Create OrderKeluar', 'url'=>array('create')),
	array('label'=>'Manage OrderKeluar', 'url'=>array('admin')),
);
?>

<h1>Order Keluars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
