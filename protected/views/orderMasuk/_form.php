<?php
/* @var $this OrderMasukController */
/* @var $model OrderMasuk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-masuk-form',
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
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_barang'); ?>
		<?php echo $form->textField($model,'id_barang'); ?>
		<?php echo $form->error($model,'id_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_bahan'); ?>
		<?php echo $form->textField($model,'harga_bahan'); ?>
		<?php echo $form->error($model,'harga_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sablon'); ?>
		<?php echo $form->textField($model,'id_sablon'); ?>
		<?php echo $form->error($model,'id_sablon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jahit'); ?>
		<?php echo $form->textField($model,'id_jahit'); ?>
		<?php echo $form->error($model,'id_jahit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_sablon'); ?>
		<?php echo $form->textField($model,'total_sablon'); ?>
		<?php echo $form->error($model,'total_sablon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_jahit'); ?>
		<?php echo $form->textField($model,'total_jahit'); ?>
		<?php echo $form->error($model,'total_jahit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_all'); ?>
		<?php echo $form->textField($model,'total_all'); ?>
		<?php echo $form->error($model,'total_all'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c_at'); ?>
		<?php echo $form->textField($model,'c_at'); ?>
		<?php echo $form->error($model,'c_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_at'); ?>
		<?php echo $form->textField($model,'u_at'); ?>
		<?php echo $form->error($model,'u_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c_by'); ?>
		<?php echo $form->textField($model,'c_by'); ?>
		<?php echo $form->error($model,'c_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_by'); ?>
		<?php echo $form->textField($model,'u_by'); ?>
		<?php echo $form->error($model,'u_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->