<?php
/* @var $this OrderMasukController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Order Masuks',
);

$this->menu=array(
	array('label'=>'Create OrderMasuk', 'url'=>array('create')),
	array('label'=>'Manage OrderMasuk', 'url'=>array('admin')),
);
?>

<h1>Order Masuks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
