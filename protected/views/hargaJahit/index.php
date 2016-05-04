<?php
/* @var $this HargaJahitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Harga Jahits',
);

$this->menu=array(
	array('label'=>'Create HargaJahit', 'url'=>array('create')),
	array('label'=>'Manage HargaJahit', 'url'=>array('admin')),
);
?>

<h1>Harga Jahits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
