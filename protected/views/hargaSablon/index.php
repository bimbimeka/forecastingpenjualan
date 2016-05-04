<?php
/* @var $this HargaSablonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Harga Sablons',
);

$this->menu=array(
	array('label'=>'Create HargaSablon', 'url'=>array('create')),
	array('label'=>'Manage HargaSablon', 'url'=>array('admin')),
);
?>

<h1>Harga Sablons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
