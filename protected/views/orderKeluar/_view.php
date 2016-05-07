<?php
/* @var $this OrderKeluarController */
/* @var $data OrderKeluar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_order')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_order_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->id_order_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty_awal')); ?>:</b>
	<?php echo CHtml::encode($data->qty_awal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->qty_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_at')); ?>:</b>
	<?php echo CHtml::encode($data->c_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_at')); ?>:</b>
	<?php echo CHtml::encode($data->u_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('c_by')); ?>:</b>
	<?php echo CHtml::encode($data->c_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_by')); ?>:</b>
	<?php echo CHtml::encode($data->u_by); ?>
	<br />

	*/ ?>

</div>