<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>


<div class="form">



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
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
		<?php echo $form->labelEx($model,'jenis'); ?>
		<?php echo $form->textField($model,'jenis',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jenis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artikel'); ?>
		<?php echo $form->textField($model,'artikel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'artikel'); ?>
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


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->