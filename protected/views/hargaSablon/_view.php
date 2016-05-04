<?php
/* @var $this HargaSablonController */
/* @var $data HargaSablon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ongkos')); ?>:</b>
	<?php echo CHtml::encode($data->ongkos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat')); ?>:</b>
	<?php echo CHtml::encode($data->cat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listrik')); ?>:</b>
	<?php echo CHtml::encode($data->listrik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('makan')); ?>:</b>
	<?php echo CHtml::encode($data->makan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('press')); ?>:</b>
	<?php echo CHtml::encode($data->press); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dll')); ?>:</b>
	<?php echo CHtml::encode($data->dll); ?>
	<br />

	<?php /*
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