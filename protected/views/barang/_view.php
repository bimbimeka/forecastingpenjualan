<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barcode')); ?>:</b>
	<?php echo CHtml::encode($data->barcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artikel')); ?>:</b>
	<?php echo CHtml::encode($data->artikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_awal')); ?>:</b>
	<?php echo CHtml::encode($data->stock_awal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bm')); ?>:</b>
	<?php echo CHtml::encode($data->bm); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bk')); ?>:</b>
	<?php echo CHtml::encode($data->bk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->stock_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_at')); ?>:</b>
	<?php echo CHtml::encode($data->c_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_by')); ?>:</b>
	<?php echo CHtml::encode($data->c_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_at')); ?>:</b>
	<?php echo CHtml::encode($data->u_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_by')); ?>:</b>
	<?php echo CHtml::encode($data->u_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>