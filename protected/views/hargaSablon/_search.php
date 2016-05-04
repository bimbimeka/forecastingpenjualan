<?php
/* @var $this HargaSablonController */
/* @var $model HargaSablon */
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
		<?php echo $form->label($model,'ongkos'); ?>
		<?php echo $form->textField($model,'ongkos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat'); ?>
		<?php echo $form->textField($model,'cat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listrik'); ?>
		<?php echo $form->textField($model,'listrik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'makan'); ?>
		<?php echo $form->textField($model,'makan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'press'); ?>
		<?php echo $form->textField($model,'press'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dll'); ?>
		<?php echo $form->textField($model,'dll'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_at'); ?>
		<?php echo $form->textField($model,'c_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_by'); ?>
		<?php echo $form->textField($model,'c_by',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'u_at'); ?>
		<?php echo $form->textField($model,'u_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'u_by'); ?>
		<?php echo $form->textField($model,'u_by',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->