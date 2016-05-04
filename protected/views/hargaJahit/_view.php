<?php
/* @var $this HargaJahitController */
/* @var $data HargaJahit */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ongkos')); ?>:</b>
	<?php echo CHtml::encode($data->ongkos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potong')); ?>:</b>
	<?php echo CHtml::encode($data->potong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('steam')); ?>:</b>
	<?php echo CHtml::encode($data->steam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plastik')); ?>:</b>
	<?php echo CHtml::encode($data->plastik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gas')); ?>:</b>
	<?php echo CHtml::encode($data->gas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listrik')); ?>:</b>
	<?php echo CHtml::encode($data->listrik); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('makan')); ?>:</b>
	<?php echo CHtml::encode($data->makan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('benang')); ?>:</b>
	<?php echo CHtml::encode($data->benang); ?>
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