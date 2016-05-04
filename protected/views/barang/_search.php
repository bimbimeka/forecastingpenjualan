<?php
/* @var $this BarangController */
/* @var $model Barang */
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
		<?php echo $form->label($model,'barcode'); ?>
		<?php echo $form->textField($model,'barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis'); ?>
		<?php echo $form->textField($model,'jenis',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'artikel'); ?>
		<?php echo $form->textField($model,'artikel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_awal'); ?>
		<?php echo $form->textField($model,'stock_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bm'); ?>
		<?php echo $form->textField($model,'bm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bk'); ?>
		<?php echo $form->textField($model,'bk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_akhir'); ?>
		<?php echo $form->textField($model,'stock_akhir'); ?>
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