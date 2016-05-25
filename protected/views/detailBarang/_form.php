<?php
/* @var $this DetailBarangController */
/* @var $model DetailBarang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'barcode'); ?>
		<?php echo $form->textField($model,'barcode'); ?>
		<?php echo $form->error($model,'barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_awal'); ?>
		<?php echo $form->textField($model,'stock_awal'); ?>
		<?php echo $form->error($model,'stock_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bm'); ?>
		<?php echo $form->textField($model,'bm'); ?>
		<?php echo $form->error($model,'bm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bk'); ?>
		<?php echo $form->textField($model,'bk'); ?>
		<?php echo $form->error($model,'bk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_akhir'); ?>
		<?php echo $form->textField($model,'stock_akhir'); ?>
		<?php echo $form->error($model,'stock_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_barang'); ?>
		<?php echo $form->textField($model,'id_barang'); ?>
		<?php echo $form->error($model,'id_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c_at'); ?>
		<?php echo $form->textField($model,'c_at'); ?>
		<?php echo $form->error($model,'c_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c_by'); ?>
		<?php echo $form->textField($model,'c_by',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'c_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_at'); ?>
		<?php echo $form->textField($model,'u_at'); ?>
		<?php echo $form->error($model,'u_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_by'); ?>
		<?php echo $form->textField($model,'u_by',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'u_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->