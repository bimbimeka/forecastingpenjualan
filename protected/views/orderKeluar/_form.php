<?php
/* @var $this OrderKeluarController */
/* @var $model OrderKeluar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-keluar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_order'); ?>
		<?php echo $form->textField($model,'tanggal_order'); ?>
		<?php echo $form->error($model,'tanggal_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_order_masuk'); ?>
		<?php echo $form->textField($model,'id_order_masuk'); ?>
		<?php echo $form->error($model,'id_order_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty_awal'); ?>
		<?php echo $form->textField($model,'qty_awal'); ?>
		<?php echo $form->error($model,'qty_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty_akhir'); ?>
		<?php echo $form->textField($model,'qty_akhir'); ?>
		<?php echo $form->error($model,'qty_akhir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->