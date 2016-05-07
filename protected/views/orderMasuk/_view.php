<?php
/* @var $this OrderMasukController */
/* @var $data OrderMasuk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_order')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_barang')); ?>:</b>
	<?php echo CHtml::encode($data->id_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_bahan')); ?>:</b>
	<?php echo CHtml::encode($data->harga_bahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sablon')); ?>:</b>
	<?php echo CHtml::encode($data->id_sablon); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jahit')); ?>:</b>
	<?php echo CHtml::encode($data->id_jahit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_sablon')); ?>:</b>
	<?php echo CHtml::encode($data->total_sablon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_jahit')); ?>:</b>
	<?php echo CHtml::encode($data->total_jahit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_all')); ?>:</b>
	<?php echo CHtml::encode($data->total_all); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_at')); ?>:</b>
	<?php echo CHtml::encode($data->c_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_at')); ?>:</b>
	<?php echo CHtml::encode($data->u_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_by')); ?>:</b>
	<?php echo CHtml::encode($data->c_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_by')); ?>:</b>
	<?php echo CHtml::encode($data->u_by); ?>
	<br />

	*/ ?>

</div>