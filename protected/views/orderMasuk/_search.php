<?php
/* @var $this OrderMasukController */
/* @var $model OrderMasuk */
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
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_barang'); ?>
		<?php echo $form->textField($model,'id_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_bahan'); ?>
		<?php echo $form->textField($model,'harga_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sablon'); ?>
		<?php echo $form->textField($model,'id_sablon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_jahit'); ?>
		<?php echo $form->textField($model,'id_jahit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_sablon'); ?>
		<?php echo $form->textField($model,'total_sablon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_jahit'); ?>
		<?php echo $form->textField($model,'total_jahit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_all'); ?>
		<?php echo $form->textField($model,'total_all'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->