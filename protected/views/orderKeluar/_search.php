<?php
/* @var $this OrderKeluarController */
/* @var $model OrderKeluar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_order'); ?>
		<?php echo $form->textField($model,'tanggal_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_order_masuk'); ?>
		<?php echo $form->textField($model,'id_order_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty_awal'); ?>
		<?php echo $form->textField($model,'qty_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty_akhir'); ?>
		<?php echo $form->textField($model,'qty_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_at'); ?>
		<?php echo $form->textField($model,'c_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'u_at'); ?>
		<?php echo $form->textField($model,'u_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_by'); ?>
		<?php echo $form->textField($model,'c_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'u_by'); ?>
		<?php echo $form->textField($model,'u_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->