<?php
/* @var $this HargaJahitController */
/* @var $model HargaJahit */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'harga-jahit-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ongkos'); ?>
		<?php echo $form->textField($model,'ongkos'); ?>
		<?php echo $form->error($model,'ongkos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'potong'); ?>
		<?php echo $form->textField($model,'potong'); ?>
		<?php echo $form->error($model,'potong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'steam'); ?>
		<?php echo $form->textField($model,'steam'); ?>
		<?php echo $form->error($model,'steam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plastik'); ?>
		<?php echo $form->textField($model,'plastik'); ?>
		<?php echo $form->error($model,'plastik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gas'); ?>
		<?php echo $form->textField($model,'gas'); ?>
		<?php echo $form->error($model,'gas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listrik'); ?>
		<?php echo $form->textField($model,'listrik'); ?>
		<?php echo $form->error($model,'listrik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'makan'); ?>
		<?php echo $form->textField($model,'makan'); ?>
		<?php echo $form->error($model,'makan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'benang'); ?>
		<?php echo $form->textField($model,'benang'); ?>
		<?php echo $form->error($model,'benang'); ?>
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