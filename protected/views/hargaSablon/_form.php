<?php
/* @var $this HargaSablonController */
/* @var $model HargaSablon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'harga-sablon-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama'); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'ongkos'); ?>
		<?php echo $form->textField($model,'ongkos'); ?>
		<?php echo $form->error($model,'ongkos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat'); ?>
		<?php echo $form->textField($model,'cat'); ?>
		<?php echo $form->error($model,'cat'); ?>
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
		<?php echo $form->labelEx($model,'press'); ?>
		<?php echo $form->textField($model,'press'); ?>
		<?php echo $form->error($model,'press'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dll'); ?>
		<?php echo $form->textField($model,'dll'); ?>
		<?php echo $form->error($model,'dll'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->